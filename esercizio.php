<!DOCTYPE html>
<html>

    <head>
        <title>
            Elaborazione Dati
        </title>

        <style>
            table, th, td
                {
                    border: 1px solid black;
                    border-collapse: collapse;
                }
        </style>

        <?php
            function CreateFile()
                {
                    $file = fopen($_POST['cognome'].$_POST['nome'], "w");
                    foreach ($_POST as $value)
                        {
                            fputs($file, $value."\n");
                        }
                }

            function ControlloTramiteEspressioneRegolare()
                {
                    echo "<h2>";
                    if (!preg_match('/^[a-zA-Z]{2,18}$/', $_POST['cognome']))
                        echo "<Il campo Cognome potrebbe essere sbagliato<BR/>";
                    if (!preg_match('/^[a-zA-Z]{2,18}$/', $_POST['nome']))
                        echo "Il campo Nome potrebbe essere sbagliato<BR/>";
                    if (!preg_match('/^[a-zA-Z\ ]{1,34}$/', $_POST['citta']))
                        echo "Il campo Città potrebbe essere sbagliato<BR/>";
                    if (!preg_match('/^(Maschio)|(Femmina)$/', $_POST['sesso']))
                        echo "Il campo Sesso potrebbe essere sbagliato<BR/>";
                    if (!preg_match('/^[A-Z]{6}[0-9]{2}[A-Z][0-9]{2}[A-Z][0-9]{3}[A-Z]$/', $_POST['codfis']))
                        echo "Il campo Codice Fiscale potrebbe essere sbagliato<BR/>";
                    if (!preg_match('/^[0-9]{11}$/', $_POST['iva']))
                        echo "Il campo Partita IVA potrebbe essere sbagliato<BR/>";
                    if (!preg_match('/^[a-z0-9_\-]+@+[a-z0-9\-]+\.+[a-z]{1,3}$/', $_POST['email']))
                        echo "Il campo Indirizzo E-Mail potrebbe essere sbagliato<BR/>";
                    if (!preg_match('/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/', $_POST['nascita']))
                        echo "Il campo Data di Nascita potrebbe essere sbagliato<BR/>";
                    if (!preg_match('/^[0-9]{8,11}$/', $_POST['telefono']))
                        echo "Il campo Numero di Telefono potrebbe essere sbagliato<BR/>";
                    echo "</h2>";
                    echo "<BR/>";
                }

            function PrintTable()
                {
                    echo "<tr>";
                        if ($_POST['sesso'] == "Femmina")
                            echo "<td colspan='6'>Benvenuta Signora</td>";
                        else if ($_POST['sesso'] == "Maschio")
                            echo "<td colspan='6'>Benvenuto Signore</td>";
                        else
                            echo "Correggere il Campo Sesso!!";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td colspan='6'>I dati da lei inseriti sono i seguenti</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>Nome</td>";
                        echo "<td colspan='2'>".$_POST['nome']."</td>";
                        echo "<td>Cognome</td>";
                        echo "<td colspan='2'>".$_POST['cognome']."</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>Sesso</td>";
                        echo "<td>".$_POST['sesso']."</td>";
                        echo "<td>Data di Nascita</td>";
                        echo "<td>".$_POST['nascita']."</td>";
                        echo "<td>Città</td>";
                        echo "<td>".$_POST['citta']."</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>Codice Fiscale</td>";
                        echo "<td colspan='2'>".$_POST['codfis']."</td>";
                        echo "<td>E_Mail</td>";
                        echo "<td colspan='2'>".$_POST['email']."</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>Conferma</td>";
                            echo "<td colspan='2'><form name='login' action = 'grazie.html' method = 'POST'>";
                                echo "<input type='submit' value='Ok'>";
                            echo "</form></td>";
                        echo "<td>Correggi</td>";
                        echo "<td colspan='2'><form name='login' action = 'esercitazione.php' method = 'POST'>";

                            echo "<input type='hidden' name='cognome' value='".$_POST['cognome']."'>";
                            echo "<input type='hidden' name='nome' value='".$_POST['nome']."'>";
                            echo "<input type='hidden' name='citta' value='".$_POST['citta']."'>";
                            echo "<input type='hidden' name='sesso' value='".$_POST['sesso']."'>";
                            echo "<input type='hidden' name='codfis' value='".$_POST['codfis']."'>";
                            echo "<input type='hidden' name='iva' value='".$_POST['iva']."'>";
                            echo "<input type='hidden' name='email' value='".$_POST['email']."'>";
                            echo "<input type='hidden' name='nascita' value='".$_POST['nascita']."'>";
                            echo "<input type='hidden' name='telefono' value='".$_POST['telefono']."'>";

                            echo "<input type='submit' value='Ok'>";
                        echo "</form></td>";
                    echo "</tr>";
                }
        ?>
    </head>

    <body>

        <table>
            <?php
                CreateFile();
                ControlloTramiteEspressioneRegolare();
                PrintTable();
            ?>
        </table>

    </body>

</html>
