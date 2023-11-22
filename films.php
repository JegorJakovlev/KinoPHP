<!DOCTYPE html>
<html>
<head>
    <title>FilmsCinos</title>
    <style>
        
        body {
            background-color: #ffd700; 
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        #container {
            width: 80%;
            margin-top: 20px;
        }
        #films {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        #header {
            background-color: #ff4500; 
            padding: 10px;
            text-align: center;
            color: white;
            border-radius: 8px 8px 0 0;
        }
        #login {
            display: flex;
            align-items: center;
            color: white;
        }
        #login input[type="text"],
        #login input[type="password"],
        #login input[type="submit"] {
            margin-right: 10px;
            padding: 5px;
            border-radius: 4px;
            border: none;
        }
        .movie {
            border: 2px solid #ff4500; 
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fff; 
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .movie img {
            max-width: 100%;
            height: auto;
            border-radius: 6px;
        }
        .schedule {
            padding-left: 20px;
        }
        .schedule h3 {
            text-align: center;
            margin-bottom: 10px;
            font-size: 1.2em;
        }
        .schedule ul {
            list-style: none;
            padding: 0;
        }
        .schedule li {
            margin-bottom: 5px;
            display: flex;
            justify-content: space-between;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

<div id="container">
    <div id="films">
        <div id="header">
            <h1>FilmsCinos</h1>
            <div id="login">
                <form action="login.php" method="post">
                    <input type="text" name="username" placeholder="Логин">
                    <input type="password" name="password" placeholder="Пароль">
                    <input type="submit" value="Вход">
                </form>
            </div>
        </div>

        <?php
       
        $movies = array(
            array(
                'title' => 'Inception',
                'year' => 2010,
                'genre' => 'Sci-Fi',
                'director' => 'Christopher Nolan',
                'image' => 'image/Inception.jpg',
                'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology...',
                'schedule' => array(
                    array('time' => '22 ноября 2023 - 18:00', 'price' => '$10'),
                    array('time' => '25 ноября 2023 - 20:00', 'price' => '$12'),
                    array('time' => '27 ноября 2023 - 15:00', 'price' => '$9')
                )
            ),
            array(
                'title' => 'The Shawshank Redemption',
                'year' => 1994,
                'genre' => 'Drama',
                'director' => 'Frank Darabont',
                'image' => 'image/The Shawshank Redemption.jpg',
                'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption...',
                'schedule' => array(
                    array('time' => '23 ноября 2023 - 17:00', 'price' => '$11'),
                    array('time' => '26 ноября 2023 - 19:30', 'price' => '$13'),
                    array('time' => '28 ноября 2023 - 14:00', 'price' => '$10')
                )
            ),
            array(
                'title' => 'Pulp Fiction',
                'year' => 1994,
                'genre' => 'Crime',
                'director' => 'Quentin Tarantino',
                'image' => 'image/Pulp Fiction.jpg',
                'description' => 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine...',
                'schedule' => array(
                    array('time' => '24 ноября 2023 - 16:30', 'price' => '$12'),
                    array('time' => '27 ноября 2023 - 18:45', 'price' => '$10'),
                    array('time' => '29 ноября 2023 - 12:00', 'price' => '$11')
                    
                )
            )
        );
   
    foreach ($movies as $movie) {
        echo '<div class="movie">';
        echo '<div>';
        echo '<h2>' . $movie['title'] . '</h2>';
        echo '<img src="' . $movie['image'] . '" alt="' . $movie['title'] . '">';
        echo '<p><strong>Год:</strong> ' . $movie['year'] . '</p>';
        echo '<p><strong>Жанр:</strong> ' . $movie['genre'] . '</p>';
        echo '<p><strong>Режиссер:</strong> ' . $movie['director'] . '</p>';
        echo '<p><strong>Описание:</strong> ' . $movie['description'] . '</p>';
        echo '</div>';
        echo '<div class="schedule">';
        echo '<h3>Время просмотра</h3>';
        echo '<ul>';
        foreach ($movie['schedule'] as $schedule) {
            echo '<li>';
            echo '<span>' . $schedule['time'] . '</span>';
            echo '<a href="buy_ticket.php" class="buy-ticket-btn">Buy Ticket</a>';
            echo '<span>' . $schedule['price'] . '</span>';
            echo '</li>';
        }
        echo '</ul>';
        echo '</div>';
        echo '</div>';
    }
        ?>

    </div>
</div>

    </div>
</div>

</body>
</html>
