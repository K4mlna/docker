<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Liste des clients</title>
        </head>
        <style>
                body {
                    margin: 0;
                    padding: 0;
                }
                .header {
                    position: sticky;
                    top: 0;
                    background-color: #FFFFFF;
                    padding: 10px 0;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                }
                .logo {
                    max-width: 100px;
                    margin-left: 2rem;
                }
                .logo img {
                    width: 282px;
                    height: 82px;
                }
                .images-container {
                    display: flex;
                    align-items: center;
                }
                .rounded-image {
                    width: 50px;
                    height: 50px;
                    border-radius: 10px;
                    margin-right: 10px;
                }
                .clickable-button {
                    background-color: #00401A;
                    color: white;
                    padding: 18px 40px;
                    margin-right: 20px;
                    border: none;
                    border-radius: 10px;
                    cursor: pointer;
                    font-size: 30px;
                }
                .clickable-button2 {
                    background-color: #009B3E;
                    color: white;
                    padding: 18px 40px;
                    margin-right: 20px;
                    border: none;
                    border-radius: 10px;
                    cursor: pointer;
                    font-size: 30px;
                }
                .clickable-button:hover {
                    background-color: #009B3E;
                    transition: 200ms linear;
                }
                .button-container {
                    padding-right: 2rem;
                }
                .title {
                    color:#009b3e;
                    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                }
                table th, table td {
                font-size: 18px;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
        </style>
        <body>
            <div class="header">
                <div class="logo">
                    <img src="https://www.lusocargo.pt/imagens/logo.png" alt="Logo">
                </div>
                <div class="button-container">
                    <button class="clickable-button2">Historique</button>
                    <button class="clickable-button">Services</button>
                    <button class="clickable-button">Nous contacter</button>
                </div>
            </div>
            <div style="text-align: center; margin-top: 2rem;">
                <h1 class="title">Historique des commandes :</h1>
            </div>
            <div style="margin: 2rem auto; max-width: 80%;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr style="background-color: #F2F2F2;">
                        <th>Nom du client</th>
                        <th>Modèle de camion</th>
                        <th>ID de la transaction</th>
                        <th>Date de commande</th>
                    </tr>
                    <?php

                        $host = "mysql"; 
                        $dbname = "website";
                        $charset = "utf8";
                        $port = "3306";
                        $username = "root";
                        $password = "user";

                        try {
                            $connection = new PDO(
                                "mysql:host=$host;dbname=$dbname;charset=$charset;port=$port",
                                $username,
                                $password
                            );

                            $sql = "SELECT * FROM client";
                            $resultat = $connection->query($sql);

                            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                                echo '<tr>';
                                echo '<td>' . htmlspecialchars($row["nom_client"]) . '</td>';
                                echo '<td>' . htmlspecialchars($row["camion"]) . '</td>';
                                echo '<td>' . htmlspecialchars($row["id_client"]) . '</td>';
                                echo '<td>' . htmlspecialchars($row["date_commande"]) . '</td>';
                                echo '</tr>';
                            }

                            echo '</table>';
                        } catch (PDOException $e) {
                            echo 'Erreur : ' . $e->getMessage();
                        }
                    ?>

                </table>
            </div>
        </body>
    </html>
