<!DOCTYPE html>
<html>
    <body>
        <h2 class="quote-title"> Quote of the Day </h2>
        <section class="quote-of-day">
            <p id="quote-text"></p>
            <p id="quote-author"> <span id="author-name"></span></p>
            <?php
                $quotes = array
                (
                    array("text" => "Coding like poetry should be short and concise.", "author" => " Santosh Kalwar"),
                    array("text" => "The only true wisdom is in knowing you know nothing.", "author" => "socrates",),
                    array("text" => "The important thing is not to stop questioning. Curiosity has its own reason for existing.", "author" => "Albert Einstein"),
                    array("text" => "Confusion is part of programming.", "author" => "Felienne Hermans"),
                    array("text" => "No matter which field of work you want to go in, it is of great importance to learn at least one programming language.", "author" => "Ram Ray"),
                    array("text" => "Most good programmers do programming not because they expect to get paid or get adulation by the public, but because it is fun to program.", "author" => "Linus Torvalds"),
                    array("text" => "Of all things, I liked books best.", "author" => "Nikola Tesla"),
                );
                $randomIndex = array_rand($quotes);
                $randomQuote = $quotes[$randomIndex];
                echo "<p id='quote-text'>" . $randomQuote['text'] . "</p>";
                echo "<p id='quote-author'> - <span id='author-name'>" . $randomQuote['author'] . "</span></p>";
            ?>
            <br>
            <form method="post">
                <button type="submit" class="new-quote-btn"> <br> <strong> New Quote </strong></button>
            </form>
        </section>
    </body>
</html>