const bcrypt = require('bcrypt');
const mysql = require('mysql');

const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'Travel'
});

connection.connect();

const password = 'password';

const query = 'SELECT password FROM pendaftar WHERE nama = ?';
connection.query(query, [nama], (error, results, fields) => {
  if (error) throw error;
  if (results.length > 0) {
    const hashedPassword = results[0].password;
    bcrypt.compare(password, hashedPassword, (error, result) => {
      if (error) throw error;
      if (result) {
        console.log('Login successful!');
      } else {
        console.log('Invalid username or password.');
      }
    });
  } else {
    console.log('Invalid username or password.');
  }
});

connection.end();
