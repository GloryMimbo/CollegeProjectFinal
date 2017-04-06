<?php
  $pageNo = "2";
  $pageName = "Pages";
  require_once("genfunctions.php");
  
  $viewName = request_get("view");
  $pageName = str_replace("-", " ", $viewName);

  require_once("common_header.php");
?>
  <!--======= PAGES =========-->
  <section class="blog">
    <div class="container">
      <ul class="row">
        <li class="col-sm-12"> 
        <!--======= PAGES =========-->
        <?php
            if($viewName=="about-immigration"){
        ?>

            <div class="blog-post">
                <a class="title-hed">About the IMMIGRATION</a> 
                <br><br>
                <p>The Democratic Republic of the Congo (DRC, formerly Zaire) is located in Central Africa and has a land surface of 2,345,000 km². Its population is estimated at nearly 68 million for 2010. Most of the population is concentrated along the periphery of the country, which highlights the need for the sound management of the country’s 10,292 km of borders and its interaction with its nine neighbouring countries. The country has rich natural resources, particularly mineral resources.</p>
                <p>The DRC remains a destination country for immigration. The country’s rich mining resources attract migrant workers from Africa and beyond. There is also considerable migration for commercial activities, from other African countries and the rest of the world, but these movements are not well studied. Transit migration towards South Africa or Europe also plays a role.</p>
                <p>The Democratic Republic of Congo was divided (up to July 20151) in ten provinces  andone city-province (the capital Kinshasa)</p>
                <p>Article 2 of the 2005 constitution of the Democratic Republic of Congo specifies a division of the country into 26 provinces, including the city-province of Kinshasa. Passed in February 2006, this new territorial organization was to take effect in the three years that followed the actual installation of the political institutions established by the Constitution (Article 226), that is to say in February 20094. From June to July, 2015 the new provinces were put in place.</p>

            </div>

        <?php
            }else if($viewName=="supporting-document"){
        ?>
            <div class="blog-post">
                <a class="title-hed">SUPPORTING DOCUMENTS</a> 
                <br><br>

                <p>Every Foreigner visiting DRCONGO must have: 

                <br><br><strong>Passport and visa  Requirements:</strong><br>
                Original, signed passport valid for 6 months beyond stay, with at least one blank passport page available for visa stamp(s). Amendment pages in the back of the passport are not suitable for visa stamps.
                And his/her DRCongo Visa that he /she can get from any DRCongo embassy in hisher country or where he/she staying currently
                Every Foreigner visiting DRCONGO must be register to the immigration office before 20 days  pf his/her arrival in DRCongo.</p>

                <p>No fee is charged for registration, but a foreigner who has delayed registration and if delay is condoned, a penalty for late registration may be charged.</p>

                <p><strong>Over stay:</strong><br>
                In the event of overstay foreigner is liable for prosecution under the rule of foreign in DRCongo and imprisonment up to 7 years with fine & expulsion from DRCongo.</p>

                <p><strong>Report of absence from Registered Address</strong><br>
                If at any time a foreigner proposes to be absent from his / her   registered address for a continuous period of eight weeks or more or change his / her registered address then the foreigner is required to inform in person or through an authorized representative or by registered post to his / her Registration Officer of his / her intention to change his registered address or to leave either temporarily or permanently the jurisdiction of the Registration Officer. In case of return, the foreigner should inform the Registration Officer of the date of return and in case the foreigner is moving away inform the change of address. Any changes made subsequently should also be intimated to the Registration Officer. Every foreigner, who stays for a period of more than eight weeks at any place in any district other than the district in which his / her registered address is situated, shall inform the Registration Officer of that district of his / her presence. This can be made in writing and the requirements deemed to have been fulfilled if, prior to arrival the foreigner furnishes to the Registration Officer of the said district intimating the dates of his proposed arrival and departure from the district.</p>

                <p><strong>Duplicate certificate of registration:</strong><br>
                If any certificate of registration, issued under existing Acts / Rules is  lost or destroyed, the foreigner to whom it was issued, shall make or send to the Registration Officer  of his registered address a report of circumstances in which it was so lost or destroyed along with an application in  writing and a copy of police report in order to issue a duplicate copy of the certificate of registration.</p>

            </div>

        <?php 
            }else if($viewName=="foreigners"){
        ?>
            <div class="blog-post">
                <a class="title-hed">FOREIRN</a> 
                <br><br>

                <p>Visitors to the Democratic Republic of the Congo must obtain a visa from one of the Democratic Republic of the Congo diplomatic missions unless they come from a visa exempt country, a country whose nationals can obtain a visa on arrival, or are arriving from a country with no embassy, in which case they can obtain a visa confirmation followed by a 7-day visa on arrival (extendable in DRC)</p>
                <p>Visitors requiring a visa need to submit a legalisedletter of invitation from a DRC person or organization. For tourists, a hotel booking confirmation is accepted in case the traveller has no contact in the DRC.</p>
                <p>Burundi, Rwanda and  Zimbabwe citizens  can visit the Democratic Republic of the Congo without a visa for up to 90 days.</p>
                <p>Holders of diplomatic or service passports issued to nationals of Iran do not require a visa for the Democratic Republic of the Congo.</p>
                <p>Kenya, Mauritius and Tanzania can visit the Democratic Republic of the Congo by obtaining a visa on arrival valid for up to 7 days.</p>

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