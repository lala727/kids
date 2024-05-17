// db.js

const mysql = require('mysql');

function createNewConnection() {
    return mysql.createConnection({
        host: 'localhost',
        user: 'root',
        password: '',
        database: 'kids' // Add this line to specify the database
    });
}

function connect(dbConnection) {
    return new Promise((resolve, reject) => {
        dbConnection.connect((err) => {
            if (err) {
                reject(err);
            } else {
                console.log('Connected to MySQL server');
                resolve();
            }
        });
    });
}

function createDatabase(dbConnection) {
    return new Promise((resolve, reject) => {
        dbConnection.query('CREATE DATABASE IF NOT EXISTS kids', (err) => {
            if (err) {
                reject(err);
            } else {
                console.log('Database created or already exists');
                resolve();
            }
        });
    });
}

function useDatabase(dbConnection) {
    return new Promise((resolve, reject) => {
        dbConnection.query('USE kids', (err) => {
            if (err) {
                reject(err);
            } else {
                console.log('Using database: kids');
                resolve();
            }
        });
    });
}

async function endConnection(dbConnection) {
    return new Promise((resolve, reject) => {
        dbConnection.end((err) => {
            if (err) {
                reject(err);
            } else {
                console.log('MySQL connection closed');
                resolve();
            }
        });
    });
}

async function setupDatabase() {
    const dbConnection = createNewConnection();

    try {
        await connect(dbConnection);
        await createDatabase(dbConnection);
        await useDatabase(dbConnection);
        return dbConnection; // Return the connection for subsequent use
    } catch (error) {
        await endConnection(dbConnection); // Close the connection in case of an error
        throw error;
    }
}

module.exports = {
    setupDatabase,
    endConnection
};
