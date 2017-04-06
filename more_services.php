<?php
  $pageNo = "3";
  $pageName = "Pages";
  require_once("genfunctions.php");
  
  $viewName = request_get("view");
  $pageName = str_replace("-", " ", $viewName);

  require_once("common_header.php");
  
    if($viewName=="environment-and-natural-resources"){
        echo '<br><img src="assets/images/environment_natural_ressource.gif" class="img-responsive">';
    }else if($viewName=="national-security-and-defence"){
        echo '<br><img src="assets/images/national_security_and_defence.gif" class="img-responsive">';
    }else if($viewName=="culture-history-and-sport"){
        echo '<br><img src="assets/images/culture_history_sport.gif" class="img-responsive">';
    }else if($viewName=="transport-and-infrastructure"){
        echo '<br><img src="assets/images/transport_and_infrastructure.gif" class="img-responsive">';
    }else if($viewName=="money-and-finance"){
        echo '<br><img src="assets/images/money_finance.gif" class="img-responsive">';
    }

?>
  <!--======= PAGES =========-->
  <section class="blog">
    <div class="container">
      <ul class="row">
        <li class="col-sm-12" style="text-align:justify;"> 
        <!--======= PAGES =========-->
        <?php
            if($viewName=="environment-and-natural-resources"){
        ?>
            <div class="blog-post">
                <a class="title-hed">Environnement</a> 
                <br><br>
                <p>The Democratic Republic of Congo (DR Congo) has the greatest extent of tropical rainforests in Africa, covering more than 100 million hectares. The forests in the eastern sector are amazingly diverse as one of the few forest areas in Africa to have survived the ice age. About 45 percent of DR Congo is covered by primary forest which provides a refuge for several large mammal species driven to extinction in other African countries. Overall, the country is known to have more than 11,000 species of plants, 450 mammals, 1,150 birds, 300 reptiles, and 200 amphibians. </p>
                <p>Despite this richness, over the past ten years DR Congo's forests have been the site of terrible violence and immense human suffering, which spilled over from Rwanda and neighboring African countries. </p>
                <p>The Second Congo War was a conflict that began in 1998 and still flares up on occasion today, although it officially ended in 2002. The war involved nine African nations and resulted in the deaths of about 3.8 million people, mostly from starvation and disease. The war is considered the deadliest conflict since World War II and has displaced millions from their homes as well as having a major impact on the environment and native wildlife of Congo DR.</p>
                <p>During the war, fighting and the movement of millions of refugees through forest regions decimated wildlife and took a heavy toll on protected areas. Virunga National Park suffered extensive damage by armed bands of soldiers and refugees from neighboring camps, who harvested some 36 million trees from the park and hunted gorillas and other animals. Garamba National Park, near Sudan, experienced raids from Sudanese soldiers who hunted endangered wildlife using automatic weapons, while Okapi Faunal Reserve, home to the Ituri Forest and more species of monkeys (13) than anywhere else in the world, was ravaged by refugee migrations and marauding bands of militias, who looted and stole conservation equipment and killed park staff. One staff member of Okapi Faunal Reserve—Corneille Ewango of the Wildlife Conservation Society—was awarded the prestigious Goldman Environmental Prize in 2005 for his efforts to protect the reserve. Now that most of the fighting has died down, groups are assessing the damage. A 2005 survey by the Dian Fossey Gorilla Fund found higher-than-expected numbers of eastern lowland gorillas.</p>
                <p>With vast forests, exceedingly high biodiversity, extraordinary hydroelectric potential, and substantial endowments of cobalt (28 percent of the world's supply), copper (6 percent), and industrial diamonds (18 percent), DR Congo should be a relatively rich country. Instead, years of widespread crippling corruption and mismanagement have left it one of the world's poorest countries. But there's still hope that smarter, more accountable use of resources, combined with sustainable development initiatives and conservation efforts, can bring a brighter future to the people of DR Congo.</p>
            </div>

            <div class="blog-post">
                <a class="title-hed">Natural Resources</a> 
                <br><br>
                <p>The DRC has extensive deposits of copper, cobalt, and coltan, as well as diamonds, gold, tin, iron ore, and oil. It produced 300,000 tons of copper and 3,600 carats of diamonds in 2009, making it the fourth-largest diamond producer in the world. In 2010, the DRC accounted for 51 percent of global cobalt production, and the extractive sector as a whole made up 20 percent of gross domestic product.</p>
                <p>The DRC was accepted as an Extractive Industries Transparency Initiative candidate country in 2007 but has failed to complete the requirements for validation. It is in the process of completing a new validation report.</p>
            </div>

        <?php
            }else if($viewName=="national-security-and-defence"){
        ?>
             <div class="blog-post">
                <a class="title-hed">National security and Defence</a> 
                <br><br>
                <p>The Democratic Republic of Congo (DR Congo) has the greatest extent of tropical rainforests in Africa, covering more than 100 million hectares. The forests in the eastern sector are amazingly diverse as one of the few forest areas in Africa to have survived the ice age. About 45 percent of DR Congo is covered by primary forest which provides a refuge for several large mammal species driven to extinction in other African countries. Overall, the country is known to have more than 11,000 species of plants, 450 mammals, 1,150 birds, 300 reptiles, and 200 amphibians. </p>
                <p>The DRC has extensive deposits of copper, cobalt, and coltan, as well as diamonds, gold, tin, iron ore, and oil. It produced 300,000 tons of copper and 3,600 carats of diamonds in 2009, making it the fourth-largest diamond producer in the world. In 2010, the DRC accounted for 51 percent of global cobalt production, and the extractive sector as a whole made up 20 percent of gross domestic product.</p>
                <p>The DRC was accepted as an Extractive Industries Transparency Initiative candidate country in 2007 but has failed to complete the requirements for validation. It is in the process of completing a new validation report.</p>
            </div>

        <?php 
            }else if($viewName=="culture-history-and-sport"){
        ?>
            <div class="blog-post">
                <a class="title-hed">Culture History and Sport</a> 
                <br><br>
                <p>With one of the largest populations in Africa, spread across a huge area, the people of DR Congo are made up of many hundreds of different groups, speaking a variety of Bantu languages.</p>
                <p>The most common native languages are Kikongo in the southwest, Lingala in the northwest, Tshiluba in the centre and Swahili in the east. These are the official languages, alongside French, which is spoken or understood across DR Congo.</p>
                <p>With over 215 different mother tongues, the DR Congo is one of the most linguistically diverse countries in the world. This means that when two Congolese people meet at random, it is extremely unlikely they will speak the same native language.</p>

                <a class="title-hed">A religious nation</a><br><br>
                <strong>Islam in the east</strong><br>
                <p>Down the eastern side of the country, slave routes of Arab traders spread Islam. Areas in the east therefore have significant Muslim populations and many mosques.</p>
                <p>Portuguese missionaries arrived many centuries ago in the region – see History & Politics – and the Catholic Church remains strong today; around half the population are Roman Catholics.</p>
                <p>Other Christian denominations have been growing in popularity. For example, the local Kimbanguist Church now has around 6 million followers. Though the churches have a strong presence, many Congolese combine Christianity with traditional animist practices, which include a belief in the spirits of ancestors.</p>
                <p>The Baptist-based Kimbanguist Church was founded by a Congolese preacher called Simon Kimbangu, who began his ministry in the 1920s. He preached pacifism and the equality of blacks and whites. Locked up for thirty years by the Belgian authorities and dying in prison, his teachings still provide inspiration for his millions of followers today.</p>
                <p>Many people also believe in ‘evil spirits’ and witchcraft. Children are thought to have close ties to the spirit world, which can lead them to be accused of sorcery and to be cast out of families – see Food & Daily Life.</p>
                
                <a class="title-hed">Musique Zaïroise</a><br><br>
                <p>Music and dance are of huge importance to Congolese people. The region’s music is sometimes referred to as ‘musiqueZaïroise’ (from Zaire, the old name of the country).</p>
                <p>A unique style arose in the region from the jazz and rumba bands of the 1940s and 1950s. Today, this popular style of African music is known as soukous.</p>
                <p>Many instruments are handmade and bands frequently form on the streets of towns and cities. In Goma, an annual Skiff arts festival is held as a showcase for the region’s music, poetry and films.</p>
                <p>The recent award-winning film ‘Benda Bilili’ documents the rise of a Kinshasa street band – Staff Bend Bilili. Their tale of international success is made even more remarkable because the band members are disabled (the name of the band means ‘beyond appearances’).</p>

            </div>
        <?php
            }else if($viewName=="transport-and-infrastructure"){
        ?>
            <div class="blog-post">
                <a class="title-hed">TRANSPORT</a> 
                <br><br>
                <p>Ground transport in the Democratic Republic of Congo (DRC) has always been difficult. The terrain and climate of the Congo Basin present serious barriers to road and rail construction, and the distances are enormous across this vast country. Furthermore, chronic economic mismanagement and internal conflict has led to serious under-investment over many years.</p>
                <p>On the other hand, the DRC has thousands of kilometres of navigable waterways, and traditionally water transport has been the dominant means of moving around approximately two-thirds of the country. </p>
                <p>And we know Flipper lives in a world full of wonder flying there-under under the sea. They were four men living all together yet they were all alone.</p>

                <a class="title-hed">Transport problems</a><br>
                <p>As an illustration of transport difficulties in the DRC, even before wars damaged the infrastructure, the so-called "national" route, used to get supplies to Bukavu from the seaport of Matadi, consisted of the following:</p>
                <p>
                    Matadi to Kinshasa – rail
                    Kinshasa to Kisangani – river boat
                    Kisangani to Ubundu – rail
                    Ubundu to Kindu – river boat
                    Kindu to Kalemie – rail
                    Kalemie to Kalundu (the lake port at Uvira) – boat on Lake Tanganyika
                    Kalundu to Bukavu – road
                    <p>In other words, goods had to be loaded and unloaded eight times and the total journey would take many months.</p>
                    <p>Many of the routes listed below are in poor condition and may be operating at only a fraction of their original capacity (if at all), despite recent attempts to make improvements. Up to 2006 the United Nations Joint Logistics Centre (UNJLC) had an operation in Congo to support humanitarian relief agencies working there, and its bulletins and maps about the transport situation are archived on the UNJLC web site.</p>
                    <p>The First and Second Congo Wars saw great destruction of transport infrastructure from which the country has not yet recovered. Many vehicles were destroyed or commandeered by militias, especially in the north and east of the country, and the fuel supply system was also badly affected. Consequently, outside of Kinshasa, Matadi and Lubumbashi, private and commercial road transport is almost non-existent and traffic is scarce even where roads are in good condition. The few vehicles in use outside these cities are run by the United Nations, aid agencies, the DRC government, and a few larger companies such as those in the mining and energy sectors. It is notable that high-resolution satellite photos on the Internet show large cities such as Bukavu, Butembo and Kikwit virtually devoid of traffic, compared to similar photos of towns in neighbouring countries.</p>
                    <p>Air transport is the only effective means of moving between many places within the country. The Congolese government, the United Nations, aid organisations and large companies use air rather than ground transport to move personnel and freight. The UN operates a large fleet of aircraft and helicopters, and compared to other African countries the DRC has a large number of small domestic airlines and air charter companies. The transport (and smuggling) of minerals with a high value for weight is also carried out by air, and in the east, some stretches of paved road isolated by destroyed bridges or impassable sections have been turned into airstrips.</p>
                    <p>For the ordinary citizen though, especially in rural areas, often the only options are to cycle, walk or go by dugout canoe.</p>
                    <p>Some parts of the DRC are more accessible from neighbouring countries than from Kinshasa. For example Bukavu itself and Goma and other north-eastern towns are linked by paved road from the DRC border to the Kenyan port of Mombasa, and most goods for these cities have been brought via this route in recent years. Similarly, Lubumbashi and the rest of Katanga Province is linked to Zambia, through which the paved highway and rail networks of Southern Africa can be accessed. Such links through neighbouring countries are generally more important for the east and south-east of the country, and are more heavily used, than surface links to the capital.</p>
                </p>

                <a class="title-hed">Major infrastructure programs</a><br><br>
                <p>In 2007 China agreed to lend the DRC US$5bn for two major transport infrastructure projects to link mineral-rich Katanga, specifically Lubumbashi, by rail to an ocean port (Matadi) and by road to the Kisangani river port, and to improve its links to the transport network of Southern Africa in Zambia. The two projects would also link the major parts of the country not served by water transport, and the main centres of the economy. Loan repayments will be from concessions for raw materials which China desperately needs: copper, cobalt, gold and nickel, as well as by toll revenues from the road and railway. In the face of reluctance by the international business community to invest in DRC, this represents a revitalisation of DRC's infrastructure much needed by its government.</p>
                <p>The China Railway Seventh Group Co. Ltd will be in charge of the contract, under signed by the China Railway Engineering Corporation, with construction to be started from June 2008.</p>

                <a class="title-hed">Railways</a><br>
                <p>Rail transport in the Democratic Republic of the Congo is provided by the Congo Railroad Company (Société Nationale des Chemins de Fer du Congo) and the Office National des Transports (Congo) (ONATRA) and the Office of the Uele Railways (Office des Chemins de fer des Ueles, CFU).</p>
                <p>The national system is mostly operated by the Société Nationale des Chemins de Fer du Congo (SNCC). Not all rail lines link up, but are generally connected by river transport. </p>
         
                <a class="title-hed">Waterways</a><br>
                <p>The DRC has more navigable rivers and moves more passengers and goods by boat and ferry than any other country in Africa. Kinshasa, with 7 km of river frontage occupied by wharfs and jetties,[7] is the largest inland waterways port on the continent. However, much of the infrastructure — vessels and port handling facilities — has, like the railways, suffered from poor maintenance and internal conflict.</p>
                <p>The total length of waterways is estimated at 15,000 km including the Congo River, its tributaries, and unconnected lakes.</p>
                <p>The 1000-kilometre Kinshasa-Kisangani route on the Congo River is the longest and best-known. It is operated by river tugs pushing several barges lashed together, and for the hundreds of passengers and traders these function like small floating towns. Rather than mooring at riverside communities along the route, traders come out by canoe and small boat alongside the river barges and transfer goods on the move.</p>
                <p>Most waterway routes do not operate to regular schedules. It is common for an operator to moor a barge at a riverside town and collect freight and passengers over a period of weeks before hiring a river tug to tow or push the barge to its destination.</p>

                <a class="title-hed">Airports</a>
                <p>Kemal Saiki, a United Nations spokesman, said that the Democratic Republic of the Congo does not "even have 2,000 miles of roads" and that many people traveling around the country fly on aircraft.[9]</p>
                <p>The main passenger airlines of the country are flyCongo, Compagnie Africaine d'Aviation and Korongo Airlines. All of their hubs are at Kinshasa's N'djili Airport. The country had 229 airports in 2002 and 232 around 1999.</p>



            </div>
        <?php
            }else if($viewName=="money-and-finance"){
        ?>
            <div class="blog-post">
                <a class="title-hed">Money and Finance</a> 
                <br><br>
                <p>Sparsely populated in relation to its area, the Democratic Republic of the Congo is home to a vast potential of natural resources and mineral wealth. Its untapped deposits of raw minerals are estimated to be worth in excess of US$24 trillion. Despite this, the economy has declined drastically since the mid-1980s.</p>
                <p>At the time of its independence in 1960, the Democratic Republic of the Congo was the second most industrialized country in Africa after South Africa. It boasted a thriving mining sector and its agriculture sector was relatively productive.[4] Since then, corruption, war and political instability have been a severe detriment to further growth, today leaving DRC with a GDP per capita among the world's lowest.</p>

                <p>The two recent conflicts (the First and Second Congo Wars), which began in 1996, have dramatically reduced national output and government revenue, have increased external debt, and have resulted in deaths of more than five million people from war, and associated famine and disease. Malnutrition affects approximately two thirds of the country's population.</p>
                <p>Agriculture is the mainstay of the economy, accounting for 57.9% of GDP in 1997. In 1996, agriculture employed 66% of the work force.</p>

                <p>The conflicts in the DRC were over water, minerals, and other resources. Political agendas have worsened the economy because very few people are benefiting in times of crisis while they let the people they are leading suffer. Made worse because of national and international corporations which are corrupt. The corporations allow the fighting for resources to continue simply because they continue to benefit from it. Many deaths are the result of not having basic needs which shows how the economy affects its people who are also treated like slaves. There have been lots of refugees since the fighting in 1998 which doesn’t help the poverty issue in the country. Taxes are not used for they are supposed to be used for because of those corrupt leaders fulfilling their own objectives instead of the country’s needs. The DRC is consistently rated the lowest on the UN Human Development Index.</p>

                <a class="title-hed">Special Economic Zone</a> <br><br>
                <p>The DRC is embarking on the establishment of special economic zones (SEZ) to encourage the revival of its industry. The first SEZ was planned to come into being in 2012 in N'Sele, a commune of Kinshasa, and will focus on agro-industries. The Congolese authorities also planned to open another zone dedicated to mining (Katanga) and a third dedicated to cement (in the Bas-Congo).[14] There are three phases to the program that each have their own objectives. Phase I was the precursor to the actual investment in the Special Economic Zone where policymakers agreed to the framework, the framework was studied for its establishment, and to predict the potential market demand for the land. Stage one of Phase II involved submitting laws for the Special Economic Zone, finding good sites for businesses, and currently there is an effort to help the government attract foreign investment. Stage two of Phase II hasn’t been started yet and it involves assisting the government in creating framework for the country, creating an overall plan for the site, figuring out what the environmental impact of the project will be, and guessing how much it will cost and what the return can be made on the investment. Phase III involves the World Bank creating a transaction phase that will keep everything competitive. The program is looking for options to hand over the program to the World Bank which could be very beneficial for the western part of the country.</p>

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