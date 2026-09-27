<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Finder</title>
</head>
<body>

    <h1>Course Finder</h1>

    <form method="GET" action="">
        <label for="q">Search course:</label>
        <input
            type="text"
            id="q"
            name="q"
            value="<?php echo htmlspecialchars($query); ?>"
            placeholder="Enter course code or title"
        >
        <button type="submit">Search</button>
    </form>

    <hr>

    <?php if (empty($courses)): ?>

        <p>No matching courses found.</p>

    <?php else: ?>

        <h2>Courses</h2>

        <ul>
            <?php foreach ($courses as $course): ?>
                <li>
                    <strong>
                        <?php echo htmlspecialchars($course['code']); ?>
                    </strong>
                    -
                    <?php echo htmlspecialchars($course['title']); ?>
                </li>
            <?php endforeach; ?>
        </ul>

    <?php endif; ?>

</body>
</html>