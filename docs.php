<?php
include_once 'inc/head.php';
?>
<section id="main">		
    <h1>Tempogym Jette</h1>
    <section id="docs">
        <article>
            <h2>Tenue du club</h2>
            <p>
                La tenue du club est obligatoire et sera portée en compétition et lors de l’entraînement du vendredi.
            </p>
            <p>Renseignements et commandes auprès de <a href="asbl.php#tenue">Patrice</a>.</p>
            <table class="tenue">
                <tr>
                    <th>T-shirt</th>
                    <th>Léotard garçons </th>
                    <th>Tunique d’entraînement </th>
                    <th>Tunique de compétition</th>
                </tr>
                <tr>
                    <td>12,00 €</td>
                    <td>65,00 € </td>
                    <td>39,00 € </td>
                    <td>69,00 € </td>
                </tr>
                <tr>
                    <td>Disponible pour tous mais obligatoire pour les groupes baby-gym, pré-gym et garçons s'entrainant exclusivement le vendredi</td>
                    <td>Sera porté par les gymnastes de Ludovic </td>
                    <td>Disponible pour toutes mais obligatoire pour les filles évoluant exclusivement le vendredi ou le mercredi</td>
                    <td>Disponible pour toutes mais obligatoire pour les filles s'entrainant plusieurs fois par semaine </td>
                </tr>
            </table>

            <table class="tenue_resp">
                <tr>
                    <th>T-shirt</th>
                    <td>12&nbsp;€</td>
                    <td>Disponible pour tous mais obligatoire pour les groupes baby-gym, pré-gym et garçons s'entrainant exclusivement le vendredi</td>
                </tr>


                <tr>

                    <th>Léotard garçons </th>
                    <td>65&nbsp;€</td>
                    <td>Sera porté par les gymnastes de Ludovic </td>
                </tr>
                <tr>
                    <th>Tunique d’entraînement </th>
                    <td>39&nbsp;€</td>
                    <td>Disponible pour toutes mais <strong>obligatoire</strong> pour les filles évoluant exclusivement le vendredi ou le mercredi</td>
                </tr>
                <tr>
                    <th>Tunique de compétition</th>
                    <td>69&nbsp;€</td>
                    <td>Disponible pour toutes mais obligatoire pour les filles s'entrainant plusieurs fois par semaine </td>
                </tr>
            </table>

        </article>
        <article>
            <h2>Documents à télécharger</h2>
            <ul>
               <!--<li><a href="docs/reinscription.pdf" alt="">Avis parent - Réinscription</a></li>
                <li><a href="docs/infos_cours_alain.pdf" alt="">Infos cours Alain</a></li>  -->
				 <?php
            require_once 'ia/tgj_upload.php';
            while ($lesdocs = mysqli_fetch_assoc($recup_docs)) {
                echo "<li><a href='".CHEMIN."/no/" . $lesdocs['lurl'] . "' target='_blank'>" . $lesdocs['letitre'] . "</a> (";
                // BONUS affichage de l'extension récupérée de l'url
                echo strrchr($lesdocs['lurl'], '.');
                echo ")</li><br />";
            }
            ?>
            </ul>
           
        </article>

        <article>
            <h2>
                COTISATIONS 2015-2016
            </h2>
            <table class="cotisation">
                <tr>
                    <th colspan="2">Groupes</th>
                    <th>Moniteurs</th>
                    <th>Prix</th>

                </tr>
                <tr>
                    <td rowspan="2">Mixte</td>
                    <td>Baby gym</td>
                    <td rowspan="2">Caliopi-Gaëlle<br />
                        Charline-Alizée</td>
                    <td rowspan="5">209&nbsp;€</td>
                </tr>
                <tr>
                    <td>Pré-gym</td>


                </tr>
                <tr>
                    <td rowspan="4">Filles</td>
                    <td rowspan="3">1*/sem. -2h30</td>
                    <td>Julie</td>

                </tr>
                <tr>
                    <td>??? </td>

                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>1*/sem. -3h</td>
                    <td>Caliopi</td>
                    <td>239&nbsp;€</td>
                </tr>
                <tr>
                    <td rowspan="5">Filles Compét<span class="none">ition</span></td>
                    <td>2*/sem. +04 dim.</td>
                    <td>Virginie</td>
                    <td>329&nbsp;€</td>
                </tr>
                <tr>
                    <td>2*/sem. +08 dim.</td>
                    <td>Caroline ???</td>
                    <td>349&nbsp;€</td>
                </tr>
                <tr>
                    <td>2*/sem. +14 dim.</td>
                    <td>Patrice</td>
                    <td>379&nbsp;€</td>
                </tr>
                <tr>
                    <td>2*/sem. +14 dim.</td>
                    <td>Stéphane</td>
                    <td>379&nbsp;€</td>
                </tr>
                <tr>
                    <td>2*/sem. +21 dim.</td>
                    <td>Jonathan</td>
                    <td>414&nbsp;€</td>
                </tr>
                <tr>
                    <td rowspan="3"></td>
                    <td rowspan="3">1*/sem.</td>
                    <td>Matthieu</td>
                    <td rowspan="3">209&nbsp;€</td>
                </tr>
                <tr>
                    <td>Maxime</td>
                </tr>
                <tr>
                    <td>Brieuc</td>
                </tr>
                <tr>
                    <td>Garçons Compét<span class="none">ition</span></td>
                    <td>2*/sem. +14 dim.</td>
                    <td>Ludovic</td>
                    <td>379&nbsp;€</td>
                </tr>

            </table>

            <p>
                La cotisation doit être réglée en une fois, au plus tard le 16 septembre 2015, et peut être versée sur le compte BE97 1490 5877 9749 / BIC : GEBABEBB de Tempogym Jette.
            </p>
            <p>L’assurance fédérale est incluse.
            </p>
        </article>
        <?php
        include_once 'inc/footer.php';
        ?>
    </section> 
</body>
</html>
