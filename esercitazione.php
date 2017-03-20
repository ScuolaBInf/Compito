<!DOCTYPE html>
<html>

    <head>
        <title>
            Inserimento dati
        </title>
    </head>

    <body>
        <form name='login' action = 'esercizio.php' method = 'POST'>
            <table>
                <tr>
                    <th>Richiesta</th>
                    <th>Campo</th>
                    <th>ExpReg</th>
                </tr>
                <tr>
                    <td>Cognome</td>
                    <?php echo "<td><input type='text' name='cognome' value='".$_POST['cognome']."'></td>" ?>
                    <td>/^[a-zA-Z]{2,18}$/</td>
                </tr>
                <tr>
                    <td>Nome</td>
                    <?php echo "<td><input type='text' name='nome' value=".$_POST['nome']."></td>" ?>
                    <td>/^[a-zA-Z]{2,18}$/</td>
                </tr>
                <tr>
                    <td>Città</td>
                    <?php echo "<td><input type='text' name='citta' value=".$_POST['citta']."></td>" ?>
                    <td>/^[a-zA-Z\ ]{1,34}$/</td>
                </tr>
                <tr>
                    <td>Sesso</td>
                    <?php echo "<td><input type='text' name='sesso' value=".$_POST['sesso']."></td>" ?>
                    <td>/^(Maschio)|(Femmina)$/</td>
                </tr>
                <tr>
                    <td>Codice Fiscale</td>
                    <?php echo "<td><input type='text' name='codfis' value=".$_POST['codfis']."></td>" ?>
                    <td>/^[A-Z]{6}[0-9]{2}[A-Z][0-9]{2}[A-Z][0-9]{3}[A-Z]$/</td>
                </tr>
                <tr>
                    <td>Partita IVA</td>
                    <?php echo "<td><input type='text' name='iva' value=".$_POST['iva']."></td>" ?>
                    <td>/^[0-9]{11}$/</td>
                </tr>
                <tr>
                    <td>Indirizzo E-Mail</td>
                    <?php echo "<td><input type='text' name='email' value=".$_POST['email']."></td>" ?>
                    <td>/^[a-z0-9_\-]+@+[a-z0-9\-]+\.[a-z0-9\-\.]{1,3}$/</td>
                </tr>
                <tr>
                    <td>Data di Nascita</td>
                    <?php echo "<td><input type='text' name='nascita' value=".$_POST['nascita']."></td>" ?>
                    <td>/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/</td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <?php echo "<td><input type='text' name='telefono' value=".$_POST['telefono']."></td>" ?>
                    <td>/^[0-9]{8,11}$/</td>
                </tr>
            </table>
            <input type='submit' value='Invia'>
        </form>
    </body>

</html>
