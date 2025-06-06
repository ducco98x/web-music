const express = require('express');
const cors = require('cors');
const dotenv = require('dotenv');

dotenv.config();
const app = express();
app.use(cors());
app.use(express.json());
app.use(express.static('public'));

const PORT = process.env.PORT || 5000;
app.listen(PORT, () => {
    console.log(`Server chạy tại http://localhost:${PORT}`);
});
