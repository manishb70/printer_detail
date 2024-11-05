import sqlalchemy
from sqlalchemy import inspect
import pandas as pd

# Create a function to get the database connection
def get_db_engine(host, user, password, port, dbname):
    """Establish a connection to the MySQL database using SQLAlchemy."""
    connection_string = f'mysql+mysqlconnector://{user}:{password}@{host}:{port}/{dbname}'
    engine = sqlalchemy.create_engine(connection_string)
    return engine

# Get table details (table name, column name, column data type)
def get_table_column_info(engine):
    """Get the table, column, and column data types."""
    schema_info = []

    inspector = inspect(engine)
    tables = inspector.get_table_names()

    for table in tables:
        columns = inspector.get_columns(table)
        for column in columns:
            column_info = {
                'table_name': table,
                'column_name': column['name'],
                'data_type': str(column['type'])
            }
            schema_info.append(column_info)

    return schema_info

# Get foreign key information
def get_foreign_keys(engine):
    """Get foreign key relationships."""
    foreign_keys_info = []

    inspector = inspect(engine)
    tables = inspector.get_table_names()

    for table in tables:
        foreign_keys = inspector.get_foreign_keys(table)
        for fk in foreign_keys:
            for column, ref in fk['constrained_columns']:
                foreign_keys_info.append({
                    'table_name': table,
                    'column_name': column,
                    'referenced_table': fk['referred_table'],
                    'referenced_column': ref
                })

    return foreign_keys_info

# Combine the table, column, and foreign key information
def get_database_info(host, user, password, port, dbname):
    """Get all table, column, data type, and foreign key information."""
    engine = get_db_engine(host, user, password, port, dbname)
    table_column_info = get_table_column_info(engine)
    foreign_keys_info = get_foreign_keys(engine)

    return table_column_info, foreign_keys_info

# Export the data to Excel
def export_to_excel(host, user, password, port, dbname, output_file):
    """Export database schema and foreign key info to an Excel file."""
    table_column_info, foreign_keys_info = get_database_info(host, user, password, port, dbname)

    table_column_df = pd.DataFrame(table_column_info)
    foreign_keys_df = pd.DataFrame(foreign_keys_info)

    with pd.ExcelWriter(output_file, engine='openpyxl') as writer:
        table_column_df.to_excel(writer, sheet_name='Table_Columns', index=False)
        foreign_keys_df.to_excel(writer, sheet_name='Foreign_Keys', index=False)

    print(f"Data exported to {output_file}")

# Example Usage


export_to_excel("localhost", "root", "Algo@123", 3306, "fr_office", "allInfoDb.csv")
