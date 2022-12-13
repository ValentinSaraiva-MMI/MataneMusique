</main>
<div id="slideshow">
   <div>
     <img src="https://assets.codepen.io/9632/dog.jpg">
   </div>
   <div>
     <img src="https://assets.codepen.io/9632/plant.jpg">
   </div>
   <div>
     Pretty cool eh? This slide is proof the content can be anything.
   </div>
</div>
<footer>
        <div class="content">
            <div class="link-boxes">
                <ul class="box-infos">

                    <li class="link_name">NOUS JOINDRE</li>
                    <li class="li-marge">Du lundi au jeudi de 13h a 19h</li> 
                    <li> École de musique de Matane Inc. </li>
                    <li> C.P. 192, 611, avenue Saint-Rédempteur </li>
                    <li class="li-marge"> École Marie-Guyart, entrée 4 </li>                        
                    <li class="li-marge">418 562-4212</li>
                    <li class="li-marge suivez-nous">Suivez nous</li>

                    <div class="media-icons">
                        <a href="https://fr-ca.facebook.com/people/%C3%89cole-de-musique-de-Matane/100063641619675/" target="_blank"><img class="icones"
                                src="<?php  echo (get_template_directory_uri() . '/images/facebookicone2.png')?>" alt=""></a>
                       
                        <a href="https://www.youtube.com/channel/UC55hzRGP1Kw7jceQT2xolSQ" target="_blank"><img class="icones" 
                                src="<?php  echo (get_template_directory_uri() . '/images/youtubeicone.png')?>"
                                alt=""></a>
                    </div>

                </ul>

                <ul class="box-lien">
                    <li><a href="#">Notre école</a></li>
                    <li><a href="#">Nos cours</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Nouvelles</a></li>
                    <li><a href="#">Nous joindre</a></li>
                    <li class="lien-emploi"><a href="#">Emplois</a></li>
                </ul>

                <ul class="box-infolettre">
                    <li class="link_name">Abonnez-vous a notre infolettre 😊</li>
                    <li ><input class="input-mail" type="text" placeholder="Votre adresse couriel"></li>
                    <li><input class="input-inscrire" type="button" value="S'inscrire"></li>
                </ul>
            </div>
        </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>