<?php 
session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="main.css">
    <script src="main.js" defer></script>
    <title>Document</title>
</head>
<body>
        <div class="main-container" id="main-container">
            <nav class="nav-container" id="nav-container">
                <div class="logo" id="logo">
                    <i class="bi bi-person"></i>
                    <?php 
                    if(session_status() === PHP_SESSION_ACTIVE){

                        if(isset($_SESSION["pseudo"]) || isset($_SESSION['userId'])){
                        echo"<a class='login_profil' href='MonCompte.php'>Mon Compte <a/>";
                        echo"<a class='login_profil' href='deco.php'>Deco<a/>";
                        }
                    

                    elseif(empty($_SESSION)){
                    echo "<a class='login_profil' href='Login.php'>Login<a/>";
                }
            }
                ?>
                </div>

                <div class="link-container" id="nav-list">
                    <a href="index.php" class="links" id="link1">Acceuil</a>
                    <a href="boutique.php" class="links" id="link2">Boutique</a>
                    <a href="Chat.php" class="links" id="link3">Chat</a>
                    <a href="News.php" class="links" id="link4">News</a>
                    <a href="panier.php" class="links" id="link5">Panier</a>
                </div>

                <div class="search-container" id="search-container">
                    <div class="container">
                        <i class="bi bi-search"></i>
                        <input placeholder="Rechercher" type="text" >
                        <button>Rechercher</button>
                    </div>
                </div>
            </nav>
            
            <main class="bodycontainer" id="body-container">
                    <span><h2 class="title-title">Acceuil</h2></span>

                <section class="sect-main">
                    <div class="paragraph paragraph1">
                        <p class="reveal-loaded reveal-4 welcome-msg welcome-msg1">
                            LLorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda repellat dolores facere, repudiandae quod voluptates, sunt hic nesciunt, quidem neque facilis! Est voluptate molestiae ratione perspiciatis consectetur dolor sint quibusdam.
                            Dicta fugiat eos neque aperiam beatae incidunt, quis ratione quaerat tempora quae officiis provident est earum cumque fuga voluptas adipisci tenetur doloribus! Quibusdam voluptatibus vel itaque totam praesentium suscipit beatae?
                            Voluptate corrupti perspiciatis iure reprehenderit voluptatibus porro officiis ipsum, minima molestias, distinctio explicabo facere ratione, earum deleniti autem? Nulla provident neque praesentium iusto nisi corporis impedit sequi, accusantium distinctio? Reiciendis.
                            Autem fugit cum impedit reprehenderit. Laudantium deserunt cupiditate esse, ullam officiis nulla minima facilis est alias, nesciunt earum ipsum incidunt nihil? Doloremque nostrum ab, officia ullam maiores ratione nobis soluta.
                            Dicta sequi libero nesciunt aspernatur quis esse magni beatae nulla cupiditate quod velit ab architecto omnis doloremque a, maiores ipsa consequatur delectus error ratione exercitationem ut eaque. Sapiente, voluptates impedit.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis mollitia autem debitis ab, perferendis unde delectus temporibus neque ipsa similique sit, vel laudantium quos quibusdam dolor voluptate cum iste a.
                            Necessitatibus quos ullam et eos illo minima, temporibus exercitationem ab natus iste distinctio quam assumenda aliquam eveniet totam dolores ea, nostrum vero similique deleniti voluptate officiis. In hic minima blanditiis?
                            Recusandae fugit voluptatibus accusantium? Libero hic perferendis sapiente ab aspernatur perspiciatis vel voluptates voluptatum esse veritatis saepe molestiae et rerum vitae, placeat recusandae quam asperiores aliquam! Cum quaerat consequatur veniam!
                            Numquam, cum quod commodi accusamus veritatis eos dolorum laudantium natus aliquid fugit sit incidunt provident maiores mollitia, soluta consequuntur deleniti eveniet. Temporibus illum eum hic, labore sit quos eos ducimus?
                            Inventore cupiditate labore deserunt et reiciendis perferendis omnis nobis iure tempore facere praesentium quae aliquam dolore dignissimos, illo nihil ea repudiandae beatae quas. Architecto laudantium ab est debitis quisquam. Temporibus.
                            Voluptatibus sed dolorum nam, dolor suscipit magni quas eum, saepe corrupti quisquam perferendis numquam explicabo id repudiandae voluptatem enim placeat temporibus delectus sit culpa quibusdam accusamus porro doloribus. Repellat, harum!
                            Veniam, rem necessitatibus. Ipsa aspernatur maxime dicta nobis sapiente natus quo, laudantium soluta aliquam a quasi veritatis doloremque, sed inventore. Repellendus cumque odio cupiditate quibusdam voluptate fugit inventore? Repellat, praesentium.
                            Dignissimos iste quaerat ipsam architecto ad voluptatum accusamus ut ipsa totam neque sequi eveniet accusantium nihil soluta facilis, perferendis illum quod ullam exercitationem culpa dolores deserunt voluptatibus quia. Quia, consequatur!
                            Beatae eaque odit quidem expedita, obcaecati cumque hic consequuntur ea sed quod voluptatum fugit soluta ipsa, nulla accusantium veritatis? Quos, animi. Expedita, eius aspernatur. Nemo nam nesciunt nobis dignissimos vel.
                            Corporis, atque voluptate eveniet iusto odio fugit quaerat soluta tempore libero repudiandae expedita autem in consequatur praesentium minima debitis optio quae? Vitae, necessitatibus minima! Eius omnis fuga accusantium a vero.
                        </p>

                        <img class="img_para img-para1" src="img-asset\img1.jpg" alt="">
                    </div>

                    <div class="paragraph paragraph2">
                        <img class="img_para img-para2" src="img-asset\img2.jpg" alt="">

                        <p class="welcome-msg welcome-msg2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus blanditiis perspiciatis perferendis consequatur tenetur molestias odit reprehenderit fugit officia quibusdam corrupti vero, quasi voluptatum sapiente rem dignissimos totam, esse eaque?
                        Rerum eos dicta corrupti laboriosam doloribus quae, nostrum earum perferendis veritatis explicabo blanditiis et exercitationem autem molestias maiores repudiandae necessitatibus sunt a porro. In ad omnis adipisci quos velit quam.
                        Vitae fugiat omnis rem in fugit molestiae ipsa aliquid necessitatibus et atque! Doloribus ipsam molestias inventore? Assumenda voluptatum hic dolor distinctio quidem consectetur fugiat sunt. Suscipit possimus quasi expedita voluptates.
                        Molestias totam labore voluptas aliquid aut asperiores beatae natus incidunt voluptatem recusandae vitae, enim animi numquam tenetur mollitia nostrum? Quibusdam accusamus dolor, provident inventore laboriosam a laudantium aspernatur in veritatis.
                        Nam culpa mollitia, reiciendis, tenetur voluptas neque obcaecati natus error esse perspiciatis voluptate, accusantium odit laborum. Unde nisi doloremque inventore recusandae? Enim incidunt totam nisi, et voluptatum cumque quasi quibusdam.
                        Odit corporis architecto aliquid quod veritatis soluta, iusto labore, consequatur laudantium molestiae in eveniet quasi commodi nulla. Omnis qui maiores eum rerum eos consequatur sit molestiae recusandae, repudiandae deleniti excepturi?
                        Nihil, ullam autem? Repellat, aliquam illo. Repellat quasi delectus nostrum velit itaque repellendus distinctio in dolores, sit adipisci quia aut? Ipsam, sunt labore. Nihil aliquid voluptates modi magnam assumenda odio!
                        Laborum molestiae atque voluptate cum hic dolorem facere quibusdam perspiciatis ipsam minus, aperiam esse molestias possimus, debitis dolores architecto quos. Ex laborum consequatur porro voluptate excepturi cupiditate quam est facilis.
                        Qui odio quo sunt ab sit nisi vel illum quia harum deleniti assumenda id ipsam, rerum esse dignissimos amet nesciunt fuga alias, delectus eaque nostrum dolor voluptatum? Repudiandae, doloremque voluptatem?
                        Rerum, sequi totam consequuntur quidem quis facilis iste qui nemo, quas ipsa soluta quia fugit quasi ad cupiditate, veniam quam? Corrupti commodi qui nemo incidunt natus fuga atque excepturi id!
                        Quis alias aspernatur voluptatum ratione at possimus, nihil ducimus eaque dicta eum, maxime maiores itaque facere in soluta autem provident nulla illum, aliquid harum est. Magni neque natus sunt deserunt.
                        Perspiciatis sed facere aspernatur reiciendis ab quibusdam eveniet maxime odio nisi amet veritatis temporibus, doloribus rerum minima? Corporis doloribus mollitia assumenda ducimus dicta, rerum asperiores dolor facilis reiciendis cupiditate velit.
                        Quia optio enim rem placeat eos ducimus veniam assumenda incidunt in et? Incidunt ex similique inventore magni officia at asperiores repellat itaque, laboriosam officiis quia! Facere distinctio officia ipsa molestiae.
                        Distinctio veniam eius nobis laborum et impedit, porro, nostrum neque sed necessitatibus quisquam doloribus provident quis excepturi adipisci aliquam rem recusandae nihil minima deserunt quaerat corrupti asperiores nam. Itaque, quam.
                        Velit mollitia fuga atque? Minima explicabo nostrum maxime recusandae quidem mollitia pariatur incidunt facilis officia. Sapiente perferendis pariatur quo ipsam cumque impedit, accusamus, laboriosam ex at voluptatem aut reprehenderit sit?</p>


                    </div>

                    <div class="paragraph paragraph3">
                        <p class="welcome-msg welcome-msg3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, quae dolorem, officiis eius porro nam enim id repellat veniam dolores totam unde iusto eligendi cumque ut laborum quibusdam. Consequuntur, quae.
                        Pariatur hic mollitia maxime accusantium non numquam ducimus at et molestiae similique dolore, inventore, aperiam a incidunt! Voluptates reprehenderit iure, alias itaque esse deserunt a laudantium maxime, provident facilis aliquid?
                        Rem quis non inventore, facere excepturi vel similique repudiandae sequi temporibus culpa ipsum delectus expedita ex nostrum, odit harum. Iure qui, dolorum in esse assumenda incidunt aliquid architecto recusandae maiores!
                        Ex in qui quisquam magni sapiente officia beatae, fuga nihil rerum quod. Itaque reiciendis aliquid dicta illum suscipit voluptatem unde officia, odit cum repellendus fuga, debitis perspiciatis ipsa eius tenetur?
                        Quam porro optio sint ab ipsa eaque consequuntur asperiores eveniet, quae in unde veniam saepe? Nemo, itaque omnis unde enim aliquid optio, minus, porro labore at maiores eaque laudantium modi.
                        Quaerat, nobis alias consequuntur labore assumenda eius tempora aliquid laudantium voluptatibus deserunt sunt amet unde in natus, aliquam sint quo iste vitae dignissimos? Atque possimus magni beatae, error at illum!
                        Accusantium dolore dolor corporis soluta aut? Error pariatur veritatis alias, reiciendis et consectetur eaque eos illo quod dolore neque officia tenetur animi autem fugit ratione. Ad provident debitis aliquid ab?
                        Tempora eius nihil dolores officiis quod in eum neque, ad commodi ipsum placeat, quo illum minus omnis qui eveniet itaque harum veritatis voluptates reiciendis id necessitatibus? Minus incidunt veritatis aperiam.
                        Optio doloribus non modi officiis pariatur voluptas quis commodi dolor saepe sequi tempore unde blanditiis corrupti totam quas quisquam omnis, magni assumenda corporis repellat repudiandae earum maxime eius! Minima, laudantium?
                        Similique accusantium eius necessitatibus ea dolore recusandae magni quia a ipsum! Ipsam veritatis recusandae possimus velit commodi obcaecati fugit consequuntur minus deleniti ratione! Aut ut ipsum harum non dignissimos. Quia!
                        Nulla deserunt, dolor iste neque, itaque at soluta quis ut ratione magni, repudiandae dicta quaerat eum! Earum explicabo sapiente omnis tenetur porro eum tempora sunt nesciunt. Ex temporibus vero possimus.
                        Magni quos similique molestiae. Tempore labore iusto laboriosam quam quaerat. Saepe suscipit quia quasi alias dignissimos reprehenderit tenetur odio a porro ducimus nobis veritatis, autem sapiente deserunt sed natus in.
                        Molestiae placeat neque delectus quaerat, assumenda sed ipsum tempore quibusdam corporis, velit sequi aliquid modi obcaecati quisquam, in eius impedit. Voluptatem, illo aperiam eaque exercitationem cum vel sapiente laboriosam animi!
                        Doloribus ipsa aspernatur explicabo accusantium eum cumque nihil, debitis commodi inventore perferendis earum eveniet est soluta numquam odio ducimus, impedit ipsum minus facere. Magnam debitis nobis laboriosam ab velit dolore?
                        Tenetur eos omnis doloremque nemo magni adipisci dicta. Veniam soluta sunt similique, sequi magni molestiae eligendi officia perspiciatis numquam impedit quia voluptatibus ex provident, quibusdam laboriosam? Aperiam, quibusdam explicabo. Temporibus.</p>
                        <img class="img_para img-para2" src="img-asset\img3.jpg" alt="">

                    </div>
                    
                    <div class=" paragraph paragraph4">
                        <img class="img_para img-para1" src="img-asset\img4.jpg" alt="">

                        <p class="welcome-msg welcome-msg4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas labore hic voluptatem eius tempora quo soluta ad accusamus, quae eveniet magni consequatur a amet nulla cupiditate cum. Harum, soluta? Perferendis.
                        Nulla, suscipit ea perspiciatis doloremque eos quas quasi quaerat magni veritatis iste dolorem consequatur repudiandae beatae adipisci rerum enim id fugit similique facere impedit laborum, minima quae? Beatae, voluptate corrupti.
                        Perspiciatis laboriosam veritatis eligendi dolores dolorem labore! Eveniet fugiat placeat sequi minima culpa reprehenderit at dolor id, esse suscipit, cumque adipisci numquam pariatur porro sapiente fugit? Tempore nesciunt deserunt delectus.
                        Dolorem mollitia molestias necessitatibus expedita architecto hic ab veniam. Laudantium, tenetur, amet temporibus eos sapiente consectetur dolore numquam expedita saepe quo blanditiis rerum perspiciatis, nobis dolores ea illo commodi enim.
                        Dignissimos natus quo, cupiditate dicta libero impedit earum nostrum, quam possimus reiciendis explicabo voluptatum placeat quidem eum praesentium sapiente maiores corrupti ad magni aspernatur facere fuga voluptas! Mollitia, dolorum iste.
                        Quaerat, expedita quo? Inventore eligendi excepturi voluptatem vel quibusdam blanditiis autem aliquam odio ad dolorem minus ut atque enim repudiandae tenetur delectus, exercitationem doloribus in voluptate nesciunt necessitatibus iusto omnis?
                        Facilis quas nulla quis facere nostrum rem, atque molestias maxime possimus labore mollitia itaque, architecto harum, illum obcaecati. Eveniet at molestiae nam minima eius laudantium pariatur velit itaque deleniti nulla?
                        Alias quisquam dicta ullam qui id? Nemo minima mollitia assumenda pariatur dolorem neque! Ipsa est quia voluptate, saepe voluptatibus praesentium pariatur porro dolorem consequatur quasi sunt sint perspiciatis, necessitatibus recusandae?
                        Ducimus sed maiores aperiam. Fuga, nisi cum quod reiciendis perferendis iusto! Sunt soluta quis assumenda, quisquam deserunt nulla pariatur placeat, provident suscipit corporis iste? Nisi distinctio fugit optio aspernatur suscipit.
                        Asperiores ipsum enim aliquid tempora eveniet aspernatur exercitationem corporis alias facere? Modi provident molestias eum odio quod? Explicabo, omnis a maxime veritatis beatae eius quisquam, natus at architecto fugiat iure?
                        Minus odio corporis deleniti nemo, sed voluptate. Veritatis earum atque aperiam placeat harum? Saepe tempore ipsa illum nostrum doloribus itaque qui eligendi, nihil, assumenda, adipisci aliquam voluptates excepturi cupiditate doloremque.
                        Quaerat, officia! Dicta consectetur illo alias asperiores odio dolor nihil non optio fuga, modi autem ratione perferendis quidem libero quaerat maxime quia? Perferendis praesentium possimus quod error facilis illo obcaecati.
                        Consequuntur dignissimos inventore delectus culpa laboriosam saepe, iusto recusandae minima architecto repellat voluptatem quidem voluptatum reiciendis ratione quaerat sequi eligendi corporis quos magni? Enim incidunt accusantium error rerum fugit dolore?
                        Accusamus nesciunt alias iste dolor rerum iusto odit voluptatum quaerat, ducimus aliquid, maxime, nihil quae quia nobis quasi sed minima eligendi reprehenderit. Exercitationem, rerum architecto corrupti natus recusandae delectus sit?
                        Omnis tempore quibusdam atque minus sint corporis odit molestiae magni itaque rerum esse voluptatum, vitae architecto, aut fugit, impedit hic placeat in id. Cupiditate nobis facilis odit tempore harum accusamus.</p>

                    </div>



                </section>

            </main>
            <button class="up-Button"><i class="bi bi-arrow-up"></i></button>
        </div>
</body>
</html>