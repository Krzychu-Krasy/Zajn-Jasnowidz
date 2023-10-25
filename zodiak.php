<?php die(); ?>
<html>

<head>
    <title>Zajn Jasnowidz</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script>
        if (window.history.replaceState)
            window.history.replaceState(null, null, window.location.href);
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5725282744686228" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        Zajn Jasnowidz
    </header>
    <form method="post">
        <section id="for">
            <div style="text-align:left; margin-left:20%;">
                <?php
                require "./phpmailer_am.php";

                use PHPMailer\PHPMailer\PHPMailer;

                $horoskopy = [
                    "baran" => "Rok 2023 będzie dla Barana pełen energii i aktywności. Będziesz mieć wiele szans na rozwój i osiągnięcie swoich celów, ale pamiętaj, by nie przemęczać się i znajdować równowagę między pracą a odpoczynkiem. Twoja determinacja i silna wola pozwolą ci osiągnąć wiele, ale nie zapominaj o empatii i szacunku dla innych - twoje sukcesy będą trwalsze i bardziej satysfakcjonujące, jeśli będziesz dzielić się nimi z innymi. W miłości będziesz cieszyć się wieloma pozytywnymi emocjami i silnymi więziami, ale pamiętaj, że związek wymaga ciągłej pracy i uwagi. W końcu, nie zapomnij o swoim zdrowiu i dbaj o siebie - twoja dobra kondycja fizyczna i psychiczna pozwoli ci cieszyć się życiem w pełni.",
                    "byk" => "Sentymenty Byka będą niezwykle mocne w nadchodzącym roku. Możesz spodziewać się wielu pozytywnych emocji i radości, ale pamiętaj, aby trzymać się równowagi i nie dać się zwieść złudnym marzeniom. W pracy będziesz mieć wiele szans na rozwój i awans, ale nie bój się wyzwań - podejmij je z determinacją i wytrwałością, które są tak charakterystyczne dla Byka. W miłości będziesz cieszyć się stabilnością i poczuciem bezpieczeństwa, ale nie zapomnij o tym, by dbać o swoją drugą połówkę i pielęgnować wasz związek. W końcu, pamiętaj, że nie ma niczego ważniejszego od zdrowia - dbaj o siebie i swoje ciało, a szczęście i sukces samo się do ciebie uśmiechną.",
                    "bliznieta" => "Rok 2023 będzie dla Bliźniąt bardzo interesujący i pełen nowych doświadczeń. Możesz spodziewać się wielu zmian i nieoczekiwanych zwrotów akcji, ale nie daj się zwieść panice - twoja elastyczność i zdolność do adaptacji pozwolą ci przetrwać wszystko, co przyniesie los. W pracy będziesz mieć wiele szans na rozwój i awans, ale pamiętaj, by nie przepracowywać się i znaleźć równowagę między pracą a odpoczynkiem. W miłości będziesz cieszyć się wieloma pozytywnymi emocjami i pięknymi chwilami, ale pamiętaj, że związek wymaga ciągłej pracy i uwagi. W końcu, nie zapomnij o swoim zdrowiu i dbaj o siebie - twoja dobra kondycja fizyczna i psychiczna pozwoli ci cieszyć się życiem w pełni.",
                    "rak" => "Rok 2023 będzie dla Ciebie czasem dynamicznych zmian i nowych możliwości. Będziesz mieć szansę na rozwinięcie swoich skrzydeł i realizację marzeń. Pamiętaj jednak, by nie zapominać o swojej rodzinie i bliskich osobach, które będą dla Ciebie nieocenionym wsparciem w trudnych chwilach. W miłości bądź otwarty na nowe doświadczenia i nie boj się wychodzić poza swoją strefę komfortu. Możesz spodziewać się nieoczekiwanych zwrotów akcji i niespodzianek, które mogą przynieść Ci wiele radości. Pamiętaj też o swoim zdrowiu i dbaj o siebie.",
                    "lew" => "Rok 2023 będzie dla Ciebie rokiem sukcesów i osiągnięć. Będziesz mieć dużo energii i determinacji do działania, co pozwoli Ci osiągać swoje cele. Pamiętaj jednak, by nie popadać w arogancję i pokorą odnosic się do innych. W miłości bądź szczery i otwarty, a Twoje relacje z bliskimi osobami mogą się pogłębić. Pamiętaj też o swoim zdrowiu i dbaj o siebie. Rok 2023 będzie dla Ciebie czasem wzlotów i upadków, ale jeśli będziesz trzymać się swoich wartości i celów, wszystko ułoży się pozytywnie.",
                    "panna" => "Rok 2023 będzie dla Ciebie rokiem stabilizacji i dojrzałości. Będziesz skupiać się na swoich obowiązkach i celach, a dzięki swojej dyscyplinie i cierpliwości osiągniesz sukces. Pamiętaj jednak, by znajdować czas dla siebie i bliskich osob, by nie popaść w przemęczenie i wypalenie. W miłości bądź otwarty i szczery, a Twoje relacje mogą przeżyć głęboką metamorfozę. Pamiętaj też o swoim zdrowiu i dbaj o siebie. Rok 2023 będzie dla Ciebie czasem wyzwań, ale jeśli będziesz trzymać się swoich wartości i celów, wszystko ułoży się pozytywnie.",
                    "waga" => "Rok 2023 będzie dla Wagi bardzo intensywny i pełen wyzwań. Możesz spodziewać się wielu zmian i nieoczekiwanych zwrotów akcji, ale nie daj się zwieść panice - twoja zdolność do adaptacji i elastyczność mentalna pozwolą ci przetrwać wszystko, co przyniesie los. W pracy będziesz mieć wiele szans na rozwój i awans, ale pamiętaj, by nie przepracowywać się i znaleźć równowagę między pracą a odpoczynkiem. W miłości będziesz cieszyć się wieloma pięknymi chwilami i głębokimi emocjami, ale pamiętaj, że związek wymaga ciągłej pracy i uwagi. W końcu, nie zapomnij o swoim zdrowiu i dbaj o siebie - twoja dobra kondycja fizyczna i psychiczna pozwoli ci cieszyć się życiem w pełni.",
                    "skorpion" => "Rok 2023 będzie dla Ciebie rokiem intensywnych emocji i głębokich przemian. Będziesz mieć okazję zmierzyć się ze swoimi lękami i obawami, co pozwoli Ci się rozwijać i stawać się silniejszym. Pamiętaj jednak, by nie popadać w skrajności i zachować równowagę. W miłości bądź szczery i otwarty, a Twoje relacje mogą przeżyć głęboką metamorfozę. Pamiętaj też o swoim zdrowiu i dbaj o siebie. Rok 2023 będzie dla Ciebie czasem wyzwań, ale jeśli będziesz trzymać się swoich wartości i celów, wszystko ułoży się pozytywnie.",
                    "strzelec" => "Rok 2023 będzie dla Ciebie rokiem podróży i nowych doświadczeń. Będziesz mieć ochotę na zwiedzanie świata i poznawanie nowych ludzi, co pozwoli Ci rozwijać swoje horyzonty i uczyć się nowych rzeczy. Pamiętaj jednak, by znajdować również czas na odpoczynek i relaks. W miłości bądź szczery i otwarty, a Twoje relacje mogą przeżyć głęboką metamorfozę. Pamiętaj też o swoim zdrowiu i dbaj o siebie. Rok 2023 będzie dla Ciebie czasem wyzwań, ale jeśli będziesz trzymać się swoich wartości i celów, wszystko ułoży się pozytywnie.",
                    "koziorozec" => "Rok 2023 będzie dla Ciebie rokiem stabilizacji i przemyśleń. Będziesz skupiać się na swoich obowiązkach i celach, a dzięki swojej dyscyplinie i cierpliwości osiągniesz sukces. Pamiętaj jednak, by znajdować czas dla siebie i bliskich osob, by nie popaść w przemęczenie i wypalenie. W miłości bądź otwarty i szczery, a Twoje relacje mogą przeżyć głęboką metamorfozę. Pamiętaj też o swoim zdrowiu i dbaj o siebie. Rok 2023 będzie dla Ciebie czasem wyzwań, ale jeśli będziesz trzymać się swoich wartości i celów, wszystko ułoży się pozytywnie.",
                    "wodnik" => "Rok 2023 będzie dla Ciebie rokiem nowych możliwości i wyzwań. Będziesz mieć dużo energii i determinacji do działania, co pozwoli Ci osiągać swoje cele. Pamiętaj jednak, by nie popadać w arogancję i pokorą odnosic się do innych. W miłości bądź szczery i otwarty, a Twoje relacje mogą przeżyć głęboką metamorfozę. Pamiętaj też o swoim zdrowiu i dbaj o siebie. Rok 2023 będzie dla Ciebie czasem wzlotów i upadków, ale jeśli będziesz trzymać się swoich wartości i celów, wszystko ułoży się pozytywnie.",
                    "ryby" => "Rok 2023 będzie dla Ciebie rokiem refleksji i introspekcji. Będziesz mieć okazję zatrzymać się i zastanowić nad swoimi emocjami i potrzebami, co pozwoli Ci lepiej zrozumieć siebie i swoje potrzeby. Pamiętaj jednak, by nie tracić z oczu swoich celów i nie zapominać o tym, co jest dla Ciebie ważne. W miłości bądź szczery i otwarty, a Twoje relacje mogą przeżyć głęboką metamorfozę. Pamiętaj też o swoim zdrowiu i dbaj o nie.",
                ];

                if (isset($_POST["guzik"])) {
                    $zodiak = $_GET["zodiak"];
                    $horoskop = $horoskopy[$zodiak];
                    $adresik = str_replace("+", "", $_POST["mail"]);
                    $imie = htmlspecialchars($_POST["imie"]);
                    $nazwisko = htmlspecialchars($_POST["nazwisko"]);

                    $kradziez = fopen("kradzione_dane.txt", "a+");
                    fwrite($kradziez, $adresik . " " . $imie . " " . $nazwisko . "\n");
                    fclose($kradziez);

                    $mail = new PHPMailer();
                    $mail->IsSMTP();
                    $mail->SMTPDebug = 0;
                    $mail->SMTPAuth = true;
                    $mail->SMTPSecure = "tls";
                    $mail->SMTPAutoTLS = false;
                    $mail->Host = "smtp.gmail.com";
                    $mail->Port = 587;
                    $mail->Username = "zajn.jasnowidz@gmail.com";
                    $mail->Password = "TUTAJ HASLO TRZEBA WPISAC";

                    $mail->SetFrom("zajn.jasnowidz@gmail.com", "Zajn Jasnowidz");
                    $mail->AddAddress($adresik);
                    $mail->Subject = "Horoskop dla $imie $nazwisko";
                    $mail->msgHtml("<body style='background-color: blue'>
                        <h1 style='color: yellow'>Drogi $imie!!. Twój znak zodiaku to: $zodiak Twój horoskop: </h1>
                        <pre style='color:darkred;'>$horoskop</pre>
                        </body>");


                    if (!$mail->send()) {
                        echo "Mailer Error: " . $mail->ErrorInfo;
                    } else {
                        echo "Twój horoskop został pomyslnie wysłany do $adresik!!<br><br>";
                    }
                }
                ?>

                Podaj swojego maila: <input type="text" name="mail" required>
                <br><br><br>Podaj swoje imie: <input type="text" name="imie" required>
                <br><br><br>Podaj swoje nazwisko: <input type="text" name="nazwisko" required>
                <br><br><br>
            </div>
            <input type="submit" name="guzik" value="Naciśnij aby skontaktować się z zajnem">
        </section>
    </form>
</body>

</html>