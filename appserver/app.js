const express = require('express');
const app = express();
const port = 3000; // Or any port you choose

// API route
app.get('/api/hello', (req, res) => {
  res.json({ message: 'Hello from Express backend!' });
});

// Start the server
app.listen(port, () => {
  console.log(`Express server running on port ${port}`);
});

