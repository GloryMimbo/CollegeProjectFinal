<?php
  $pageNo = "4";
  $pageName = "Pages";
  require_once("genfunctions.php");
  
  $viewName = request_get("view");
  $pageName = str_replace("-", " ", $viewName);

  require_once("common_header.php");

    if($viewName=="study-in-congo"){
        echo '<br><img src="assets/images/study_in_congo.gif" class="img-responsive">';
    }else if($viewName=="learning-french"){
        echo '<br><img src="assets/images/learning_frensh.gif" class="img-responsive">';
    }
?>
  <!--======= PAGES =========-->
  <section class="blog">
    <div class="container">
      <ul class="row">
        <li class="col-sm-12"> 
        <!--======= PAGES =========-->
        <?php
            if($viewName=="study-in-congo"){
        ?>
            <div class="blog-post">
                <a class="title-hed">Study in Congo</a> 
                <br><br>
                <p>The Democratic Republic of the Congo (DRC) (Républiquedémocratique du Congo) is located in central Africa and is in size, the second largest country in Africa and the eleventh in the world. It has a sizeable population of over 71 million; ranking fourth most populous in its continent and nineteenth in the world.  It is also the world’s most populous Francophone country.</p>
                <p>The education system in the Democratic Republic of the Congo is governed by three government ministries: the Ministère de l’EnseignementPrimaire, SecondaireetProfessionnel (MEPSP), the Ministère de l’EnseignementSupérieur et Universitaire (MESU) and the Ministère des Affaires Sociales (MAS).</p>
                <div class="row">
                    <div class="col-sm-6">
                        <img src="assets/images/study_congo_3.png" class="img-responsive"> 
                    </div>
                    <div class="col-sm-6">
                        <img src="assets/images/study_congo_4.png" class="img-responsive"> 
                    </div>
                </div>
                <p>
                  Schools in the public sector are not organized by the state. Instead they are organized by an ideological or social group.<br>
                <blockquote>
                <ul style="list-style-type: circle;">
                  <li>schools without conviction (French: Écoles non conventionnées)</li>
                  <li>Catholic schools (French: ÉcolesConventionnéesCatholiques)</li>
                  <li>Protestant schools (French: ÉcolesConventionnéesProtestantes)</li>
                  <li>Kimbanguist schools (French: ÉcolesConventionnéesKimbanguistes)</li>
                  <li>Islamic schools (French: ÉcolesConventionnéesIslamiques)</li>
                  <li>Salutist schools (French: ÉcolesConventionnéesSalutistes)</li>
                  <li>Brotherhood schools (French: ÉcolesConventionnées de la Fraternité)</li>
                  <li>Others</li>
                </ul>
                </blockquote>
                </p>

                <br><br>
                <h2>International organizations</h2>
                <strong>UNICEF</strong><br>
                <p>EAC and the United Nations International Children's Emergency Fund (UNICEF) are partnering in Chad, Comoros, Democratic Republic of Congo, Somalia, South Sudan, Sudan, and Yemen to bring quality basic education to over 2,5 million children.</p>

                <strong>International Rescue Committee</strong><br>
                <p>IRC is working in partnership with EAC to ensure that children in Côte d’Ivoire and the Democratic Republic of the Congo have opportunities to realize their fundamental right to an education.</p>
               
                <h2>Caritas Congo</h2>
                <p>
                  Caritas Congo ABSL in partnership with EAC will provide 46,000 students who are currently out of school in the Democratic Republic of the Congo with a complete primary education.
                  The educational system in the DRC is similar to that of Belgium in that there are six years of primary followed by 6 years of secondary education. The education system has suffered from decades of conflict although recent years have shown an improvement.
                </p>
                  <strong>Primary Education</strong><br>
                  <p>Academic education in the DRC takes 12 years to complete, of which the first 6 , and lead to a certificatd’etudesprimaires. This is necessary to proceed on to secondary education. </p>
                  <strong>Secondary Education</strong>
                  <p>Secondary education (which may be either general or technical) takes a further 5 to 6 years depending on the cycle. All those who complete a diplômed’etat are entitled to proceed on to higher education.</p>
                  <strong>Vocational Education</strong><br>
                  <p>Students may go on from primary schools to vocational schools instead, according to preferences and academic outcomes. There they can follow programs that last up to 5 years in various trades and crafts, at the conclusion of which they receive a brevet certificate.
                </p>

                <p>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="assets/images/study_congo_1.png" class="img-responsive"> 
                        </div>
                        <div class="col-sm-6">
                            <img src="assets/images/study_congo_2.png" class="img-responsive"> 
                        </div>
                    </div>
                </p>

                <h2>UNIVERSITY OF RDCONGO</h2>
                <p>
                  <ul style="list-style-type:disc">
                    <li>Université de Bandundu</li>
                    <li>Universitécatholique de Bukavu</li>
                    <li>Université cardinal Malula</li>
                    <li>Université de Cepromad</li>
                    <li>Université de Gbadolite</li>
                    <li>Universitéadventiste de Goma</li>
                    <li>Universitécatholique du Graben</li>
                    <li>Universitéd'Ikela</li>
                    <li>Institutsupérieur de commerce de Kinshasa</li>
                    <li>Institutsupérieurpédagogique et technique de Mweka</li>
                    <li>Université de Kalemie</li>
                    <li>Université de Kamina</li>
                    <li>Université de Kananga</li>
                    <li>Université de Notre-Dame du Kasai</li>
                    <li>Universitébaptiste du Congo</li>
                    <li>Universitécentrale de Kinshasa</li>
                    <li>Université de Kikwit</li>
                    <li>Université de Kindu</li>
                    <li>Université de Kinshasa</li>
                    <li>Université de technologie du Congo</li>
                    <li>Institutsupérieurd'informatique et de gestion de Kisangani</li>
                    <li>Institutsupérieur de commerce de Kisangani</li>
                    <li>Université de Kisangani</li>
                    <li>Laboratoired'analyse-recherche en économie quantitative</li>
                    <li>UniversitéLovanium</li>
                    <li>Universitéprotestante de Lubumbashi</li>
                    <li>Universitélibre de Luozi</li>
                    <li>Université de Mbujimayi</li>
                    <li>Université de Mwene-Ditu</li>
                    <li>Université Simon Kimbangu</li>
                    <li>UniversitéEspoir du Congo</li>
                    <li>Universitéofficielle de Bukavu</li>
                    <li>Universitécatholique du Congo</li>
                    <li>Université de Goma</li>
                    <li>Université de Kasa-Vubu</li>
                    <li>Université de Kolwezi</li>
                    <li>Université de Likasi</li>
                    <li>Université de Lisala</li>
                    <li>Université de Mbandaka</li>
                    <li>UniversitéKongo</li>
                    <li>Universitélibre de Kinshasa</li>
                    <li>Universitélibre des Pays des GrandsLacs</li>
                    <li>Universitépédagogiquenationale</li>
                    <li>Universitéprofessionnelled'Afrique</li>
                    <li>Universitéprotestante au Congo</li>
                    <li>Université William Booth</li>
                    </ul>
                </p>
            </div>
        <?php
            }else if($viewName=="learning-french"){
        ?>
            <div class="blog-post">
                <a class="title-hed">LEARNING FRENCH</a> 
                <br><br>
                <p>Learn about the French language: where it came from, where it's spoken and by how many people, why you should learn it, and how it compares to other languages.</p>
                <p>In DRCongo, you'll learn the version of French that you'd hear in Paris. Don't worry though! You'll be understood by the 220 million French speakers across the globe since this is considered the standard.</p>
                <p>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="assets/images/study_french_1.png" class="img-responsive"> 
                        </div>
                        <div class="col-sm-6">
                            <img src="assets/images/study_french_2.png" class="img-responsive"> 
                        </div>
                    </div>
                </p>
                <h3>French Grammar</h3>
                <p>Grammar is the structure of a language - the verbs that tell you what to do, the nouns that do it, and all the other parts of speech. These lessons on basic French grammar will help you build sentences and express yourself in French.</p>
                <h3>French Pronunciation and Listening</h3>
                <p>When people say that French is a beautiful language, they're talking about the way it sounds. Work on your pronunciation in order to be understood, and practice listening to make sure you can understand others.</p>
                <h3>French Vocabulary</h3>
                <p>Ready to learn French? Start with some basic, everyday vocabulary.</p>
                <h3>French Learning Advice</h3>
                <p>There is no single perfect way to learn French, but some ways are better than others. Your personal circumstances, too, can make a difference in deciding how and where you should learn French.</p>
                <h3>French Practice</h3>
                <p>It doesn't matter how much you study if you never practice what you've learned. Visit the forum or find a pen pal for reading and writing practice, join the Alliance française or some French institution in Rdcongo or take to practice listening and speaking, or just play a game or two for fun.</p>
            </div>
        <?php
            }
        ?>
        </li>
      </ul>
    </div>
  </section>
<?php
  require_once("common_footer.php");
?>