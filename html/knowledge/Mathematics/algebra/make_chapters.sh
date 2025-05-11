#!/bin/bash

# Define the range of chapters
start_chapter=2
end_chapter=20

# Loop through the range of chapters
for Chapter in $(seq $start_chapter $end_chapter); do
    # Use a here document to write HTML content into the file
    cat <<EOF > "chapter${Chapter}.html"
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter $Chapter</title>
</head>
<body>
    <h1>Chapter $Chapter</h1>
    <p>This is the content of Chapter $Chapter.</p>
</body>
</html>
EOF

    # Display a message for each created file
    echo "HTML content has been written to chapter${Chapter}.html"
done

