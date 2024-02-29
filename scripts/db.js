const express = require('express');
const mysql = require('mysql');

const app = express();
const port = 3306;

const db = mysql.createConnection({
    host: 'sql11.freesqldatabase.com',
    user: 'sql11687687',
    password: 'YbLBsHMrnq',
    database: 'sql11687687'
});

db.connect((err) => {
    if (err) {
        throw err;
    }
    console.log('Подключение к базе данных успешно');
});

app.post('/login', (req, res) => {
    const { login, password } = req.body;
    db.query('SELECT * FROM users WHERE login = ? AND password = ?', [login, password], (err, result) => {
        if (err) {
            res.status(500).send('Error while querying database');
        } else {
            if (result.length > 0) {
                res.status(200).send('Вход успешно выполнен');
            } else {
                res.status(401).send('Неверное имя пользователя или пароль');
            }
        }
    });
});

app.listen(port, () => {
    console.log(`Сервер запущен на порту ${port}`);
});