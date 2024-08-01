import mysql.connector
import csv

def get_table_schema(cursor):
    # Query to get table names
    cursor.execute("SHOW TABLES")
    tables = cursor.fetchall()
    
    table_schema = []

    for (table_name,) in tables:
        # Query to get column details for each table
        cursor.execute(f"DESCRIBE {table_name}")
        columns = cursor.fetchall()
        
        for column in columns:
            field_name = column[0]
            field_type = column[1]
            table_schema.append([table_name, field_name, field_type])

    return table_schema

def save_to_csv(data, filename):
    with open(filename, mode='w', newline='') as file:
        writer = csv.writer(file)
        writer.writerow(['Table Name', 'Field Name', 'Field Type'])
        writer.writerows(data)

def main():
    # Database connection details
    config = {
        'user': 'root',
        'password': 'manish@123',
        'host': 'localhost',
        'database': 'for_office',
    }

    # Connect to the MySQL database
    connection = mysql.connector.connect(**config)
    cursor = connection.cursor()

    try:
        # Get table schema
        table_schema = get_table_schema(cursor)
        
        # Save the schema to a CSV file
        save_to_csv(table_schema, 'table_schema.csv')
        print("Table schema saved to 'table_schema.csv'")

    finally:
        # Close the database connection
        cursor.close()
        connection.close()

if __name__ == "__main__":
    main()
