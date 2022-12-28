<?php
if (isset($_POST['submit'])) {
    $connection = mysqli_connect('localhost', 'root', '', 'buyersForm');
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $country = $_POST['country'];
    $formSelect = $_POST['formSelect'];
    $email = $_POST['email'];
    $companyIndustry = $_POST['companyIndustry'];
    $companyName = $_POST['companyName'];

    $query = 'INSERT INTO buyers(firstName,lastName,country,formSelect,email,companyIndustry,companyName) ';
    $query .= "VALUES ('$firstName', '$lastName', '$country', '$formSelect', '$email', '$companyIndustry', '$companyName')";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed');
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySpoon | Edible cutlery</title>
    <!-- Main CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <video autoplay loop muted plays-inline class="backVideo">
        <source src="images/NO TEXT MYSPOON SNIMAK.mp4" type="video/mp4">
    </video>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top" id="mainNavBar">
        <div class="container" id="navContainer">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" alt="Logo" width="147" height="35">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#homepage">Homepage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Contact</a>
                    </li>
                    <li class="nav-item dropdown" id="lang">
                        <a class="nav-link dropdown-toggle justify-content-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span><img src="langImages/flags/uk-flag.png" alt="UK Flag" id="langFlag"></span> EN
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><span><img src="langImages/flags/rsflag.webp" alt="RS Flag" id="langFlag"></span> RS</a></li>
                            <li><a class="dropdown-item" href="#"><span><img src="langImages/flags/spainflag.webp" alt="ES Flag" id="langFlag"></span> ES</a></li>
                            <li><a class="dropdown-item" href="#"><span><img src="langImages/flags/deflag.webp" alt="DE Flag" id="langFlag"></span> DE</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="header" id="homepage">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-10 text-center">
                    <h1>eco<span class="dot">.</span> <span class="dot">edible.</span> cheaper<span class="dot">.</span>
                    </h1>
                    <p>The spoon is a unique combination of the classic spoon that is used in catering
                        facilities, cafes, restaurants, hotels, with the difference that our spoon is edible, tasty,
                        nutritious and healthy. It is designed as a combination of a spoon and a dessert served with
                        coffee.</p>
                    <a href="#buyersForm" class="btn btn-primary" id="button">Buyers form</a> <br>
                    <a href="#products">Learn
                        more</a>
                </div>
            </div>
        </div>
    </header>
    <section class="spliter">
        <div class="container h-20">
            <div class="row h-20 align-items-center justify-content-center pt-5 pb-5 mt-0 mb-0">
                <div class="col-md-3 text-center" id="facts">
                    <p>Costs less than cookie and plastic spoon, no more losing metal spoons</p>
                </div>
                <div class="col-md-3 text-center" id="facts">
                    <p>Each spoon is packed separately and last up to 12 months</p>
                </div>
                <div class="col-md-3 text-center" id="facts">
                    <p>Customizable with your design (logo on product and packaging)</p>
                </div>
                <div class="col-md-3 text-center" id="facts2">
                    <p>Nutritious and come in many flavors but wont change taste nor sweeten your drink</p>
                </div>
            </div>
        </div>
    </section>
    <section class="content" id="products">
        <div class="container h-20">
            <div class="row h-20 align-items-center justify-content-center pt-5 pb-5 mt-0 mb-0">
                <div class="col-12 text-start">
                    <h2>Products</h2>
                </div>
            </div>
            <div class="row align-items-center text-center">
                <div class="col-md-4 text-start pt-3 align-items-center">
                    <div class="contentImg text-center">
                        <img src="products/mocup pakovanje kesica MS Original.png" alt="Edible Spoon Original" width="480" height="270">
                    </div>
                </div>
                <div class=" col-md-8 text-start">
                    <h3>Edible spoon original</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quas magnam sequi odio,
                        perferendis ad unde recusandae magni voluptates similique dicta pariatur eveniet, modi sed
                        cupiditate et, officia saepe quaerat.
                        Corrupti, similique. Corporis rem consequuntur nam voluptatum explicabo deserunt fugiat.
                        Porro non, perferendis, cumque placeat dicta, blanditiis odio laudantium voluptatum
                        perspiciatis animi iusto tenetur odit velit vitae et? Consequatur, iusto.
                        Est, voluptates accusamus natus alias, magni vero blanditiis dolores ad vel hic ipsum
                        necessitatibus ratione minima inventore optio molestiae ea non veniam? Quibusdam ipsam quos
                        enim obcaecati nulla dolorum itaque.<br><a href="#">Read more</a></p>
                </div>
            </div>
            <div class=" row h-20 align-items-center justify-content-center pt-5 mt-0 mb-0">
                <div class=" col-md-8 text-start">
                    <h3>Edible spoon cinnamon</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quas magnam sequi odio,
                        perferendis ad unde recusandae magni voluptates similique dicta pariatur eveniet, modi sed
                        cupiditate et, officia saepe quaerat.
                        Corrupti, similique. Corporis rem consequuntur nam voluptatum explicabo deserunt fugiat.
                        Porro non, perferendis, cumque placeat dicta, blanditiis odio laudantium voluptatum
                        perspiciatis animi iusto tenetur odit velit vitae et? Consequatur, iusto.
                        Est, voluptates accusamus natus alias, magni vero blanditiis dolores ad vel hic ipsum
                        necessitatibus ratione minima inventore optio molestiae ea non veniam? Quibusdam ipsam quos
                        enim obcaecati nulla dolorum itaque.<br><a href="#">Read more</a></p>
                </div>
                <div class="col-md-4">
                    <div class="contentImg">
                        <img src="products/mocup pakovanje kesica MS Cinnamon.png" alt="Edible Spoon Original" width="480" height="270">
                    </div>
                </div>
            </div>
            <div class=" row h-20 align-items-center justify-content-center pt-5 mt-0 mb-0">
                <div class="col-md-4 text-start">
                    <div class="contentImg">
                        <img src="products/Edible straw MySpoon.png" alt="Edible Spoon Original" width="480" height="270">
                    </div>
                </div>
                <div class=" col-md-8 text-start">
                    <h3>Edible straws</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quas magnam sequi odio,
                        perferendis ad unde recusandae magni voluptates similique dicta pariatur eveniet, modi sed
                        cupiditate et, officia saepe quaerat.
                        Corrupti, similique. Corporis rem consequuntur nam voluptatum explicabo deserunt fugiat.
                        Porro non, perferendis, cumque placeat dicta, blanditiis odio laudantium voluptatum
                        perspiciatis animi iusto tenetur odit velit vitae et? Consequatur, iusto.
                        Est, voluptates accusamus natus alias, magni vero blanditiis dolores ad vel hic ipsum
                        necessitatibus ratione minima inventore optio molestiae ea non veniam? Quibusdam ipsam quos
                        enim obcaecati nulla dolorum itaque.<br><a href="#">Read more</a></p>
                </div>
            </div>
            <div class=" row h-20 align-items-center justify-content-center pt-5 pb-5 mt-0 mb-0">
                <div class=" col-md-8 text-start">
                    <h3>Edible icecream spoon</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quas magnam sequi odio,
                        perferendis ad unde recusandae magni voluptates similique dicta pariatur eveniet, modi sed
                        cupiditate et, officia saepe quaerat.
                        Corrupti, similique. Corporis rem consequuntur nam voluptatum explicabo deserunt fugiat.
                        Porro non, perferendis, cumque placeat dicta, blanditiis odio laudantium voluptatum
                        perspiciatis animi iusto tenetur odit velit vitae et? Consequatur, iusto.
                        Est, voluptates accusamus natus alias, magni vero blanditiis dolores ad vel hic ipsum
                        necessitatibus ratione minima inventore optio molestiae ea non veniam? Quibusdam ipsam quos
                        enim obcaecati nulla dolorum itaque.<br><a href="#">Read more</a></p>
                </div>
                <div class="col-md-4 text-start">
                    <div class="contentImg">
                        <img src="products/mocup pakovanje kesica MS Cinnamon.png" alt="Edible Spoon Original" width="480" height="270">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="spliter2" id="buyersForm">
        <div class="container">
            <div class="row pt-5 pb-5 mt-0 mb-0">
                <div class="col-md-6 text-start" id="formText">
                    <h3>Buyers form</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quas magnam sequi odio,
                        perferendis ad unde recusandae magni voluptates similique dicta pariatur eveniet, modi sed
                        cupiditate et, officia saepe quaerat.
                        Corrupti, similique. Corporis rem consequuntur nam voluptatum explicabo deserunt fugiat.
                        Porro non, perferendis, cumque placeat dicta, blanditiis odio laudantium voluptatum
                        perspiciatis animi iusto tenetur odit velit vitae et? Consequatur, iusto.
                        Est, voluptates accusamus natus alias, magni vero blanditiis dolores ad vel hic ipsum
                        necessitatibus ratione minima inventore optio molestiae ea non veniam? Quibusdam ipsam quos
                        enim obcaecati nulla dolorum itaque.</p>
                </div>
                <div class="col-1 text-start" id="formSpliter">
                </div>
                <div class="col-md-5 text-start" id="form">
                    <form class="row g-3" action="index.php" method="POST">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="John" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Smith" required>
                        </div>
                        <div class="col-md-6">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" class="form-control" name="country" id="country" placeholder="Country Name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="input" class="form-label">I am</label>
                            <select id="input" name="formSelect" class="form-select">
                                <option selected>Company Owner</option>
                                <option>Wholesaler</option>
                                <option>Private Entity</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="name@domen.com" required>
                        </div>
                        <div class="col-12">
                            <label for="companyIndustry" class="form-label">Company Industry</label>
                            <input type="text" class="form-control" name="companyIndustry" id="companyIndustry" placeholder="Hospitality">
                        </div>
                        <div class="col-12">
                            <label for="companyName" class="form-label">Company Name</label>
                            <input type="text" class="form-control" name="companyName" id="companyName" placeholder="MyCompanyName">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">
                                    I have read and agree to the <a href="#">terms of service</a> and <a href="#">privacy policy</a>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary" name="submit" id="button">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="content" id="blog">
        <div class="container h-20">
            <div class="row h-20 align-items-center justify-content-center pt-5 pb-5 mt-0 mb-0">
                <div class="col-12 text-start">
                    <h2>Blog</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-start">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Blog post title</h5>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                                fugit sequi. At corporis cupiditate, quas pariatur, sequi debitis culpa, in fuga
                                repudiandae id quibusdam obcaecati adipisci natus magnam impedit! Repellendus!</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        <img src="images/My-Spoon-Tea-Party-10.jpg" class="card-img-bottom" alt="Tea Party">
                    </div>
                </div>
                <div class="col-md-6 text-start">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Blog post title</h5>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                                fugit sequi. At corporis cupiditate, quas pariatur, sequi debitis culpa, in fuga
                                repudiandae id quibusdam obcaecati adipisci natus magnam impedit! Repellendus!</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        <img src="images/My-Spoon-(Woods)-II.jpg" class="card-img-bottom" alt="Tea Party">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="spliter">
        <div class="container mt-5">
            <div class="row pt-5 pb-3 mt-0 mb-0">
                <div class="col-12 text-start">
                    <h2 id="faqH2">FAQs</h2>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-md-4 text-start">
                    <p class="faqs"><span class="question">How long can a spoon last in hot coffee?</span><br>The spoon
                        is heat-resistant and can last more than 5 minutes in hot coffee.</p>
                </div>
                <div class="col-md-4 text-start">
                    <p class="faqs"><span class="question">Can a spoon be eaten if it is not dipped in tea or
                            coffee?</span><br>It is your choice whether to stir the drink with a spoon or not, in any
                        case you can eat the spoon since it retains its original properties by dipping it into the
                        drink.</p>
                </div>
                <div class="col-md-4 text-start">
                    <p class="faqs"><span class="question">I am the owner of a cafe, can we buy a larger quantity that
                            we would come to pick up in person.</span><br>
                        For objects, there is a convenient pack of 200 spoons that cannot be purchased online and does
                        not ship. For details, you can contact the nearest distributor, which you can find in the
                        DISTRIBUTORS section.</p>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-md-4 text-start">
                    <p class="faqs"><span class="question">I drink bitter coffee, will the spoon sweeten the coffee
                            while stirring?</span><br>No, My spoon does not release any of its ingredients into the
                        coffee, so the taste of the coffee remains unchanged.</p>
                </div>
                <div class="col-md-4 text-start">
                    <p class="faqs"><span class="question">How hard is the spoon, can it be consumed by
                            children?</span><br>My spoon is especially interesting for children, and as far as physical
                        characteristics are concerned, it can be nibbled and chewed like any other biscuit without any
                        problems.</p>
                </div>
                <div class="col-md-4 text-start">
                    <p class="faqs"><span class="question">Can it be used for Espresso in small cups?</span><br>Yes, it
                        can be used for all types of coffee and tea, in all standard cups. You can stir your Espresso or
                        Ristretto served in a small cup without any problems.</p>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-md-4 text-start">
                    <p class="faqs"><span class="question">Is the spoon a dietary product?</span><br>No, the spoon is
                        not declared as a dietary product.</p>
                </div>
                <div class="col-md-4 text-start">
                    <p class="faqs"><span class="question">Is water used in the ingredients used to make the
                            spoon?</span><br>No, water is not an integral part of the recipe.</p>
                </div>
                <div class="col-md-4 text-start">
                    <p class="faqs"><span class="question">Can it be bought by the piece?</span><br>Spoons are sold in
                        packs of 96 pieces, individual sales are not possible.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="content" id="about">
        <div class="container">
            <div class="row pt-5 pb-5 mt-0 mb-0">
                <div class="col-12 text-start">
                    <h2>About us</h2>
                </div>
            </div>
            <div class="row pb-5 mt-0 mb-0">
                <p>In 2019, a group of young visionaries created the MySpoon brand in the desire to create products
                    that would become a healthy alternative to items that are in daily use, and which are very harmful
                    due to their composition and properties. We have protected the brand and innovative design in front
                    of domestic and foreign institutions in order to ensure a safe and high-quality future of our range
                    of products.</p>
            </div>
            <div class="row pb-5 mt-0 mb-0">
                <p><span class="aboutSpan">Idea</span> came from a study that showed the harmfulness of disposable
                    plastic utensils in
                    the Horeca
                    program. The plastic from which objects such as spoons for mixing coffee are made is very harmful,
                    both in contact with food or drink, and in contact with humans. Biting plastic spoons, which has
                    become a habit of coffee lovers, has a very bad effect on the health of the teeth, but also on the
                    health of the entire organism, because by biting, toxins from plastic are directly introduced into
                    the body. After using disposable utensils, these items usually end up in landfills at best, and can
                    be seen everyday on city sidewalks, parks, green spaces, rivers and lakes. The fact that something
                    we use for a few seconds remains in the natural environment as a pollutant for 1000 years makes it
                    necessary for each of us to ask ourselves about our awareness towards the environment that we
                    inherited from our ancestors, and which we should preserve for our descendants. If you take into
                    account the fact that it is plastic that is not suitable for recycling, the problem is certainly
                    deepening. Bearing in mind that the ban on the production and sale of plastic products, including
                    disposable plastic spoons, came into force in the EU countries, we come to the conclusion that all
                    is not lost and that there is hope that the consciousness of the population will change.</p>
            </div>
            <div class="row pb-5 mt-0 mb-0">
                <p><span class="aboutSpan">Mission</span> of the brand and company My spoon offers a
                    solution to its consumers in the form of an edible spoon.
                    We strive to provide healthy, tasty and nutritious products in order to raise awareness of a
                    balanced and healthy diet. The goal of us, who make efforts to use edible spoons instead of plastic
                    or wooden disposable spoons, is also to inform users in order to spread awareness about the harmful
                    impact of these products on the overall health of people and the environment. Plastic is a pollutant
                    from the moment of production, during use and after use. The wood is not harmful, but in order to
                    get a wooden spoon, the trees must be cut, and that cannot be a good thing. Also, in the process of
                    producing wooden spoons, harmful glues and other chemical substances are used, which we consider
                    potentially very dangerous. There is an alternative and we will try to make our alternative
                    available to the widest possible range of users. Therefore, if you are someone who values ​​a
                    healthy lifestyle, then you are in the right place.</p>
            </div>
            <div class="row pb-5 mt-0 mb-0">
                <p><span class="aboutSpan">Production</span> of My spoon products is absolutely
                    automated. Every machine that is a component of our production plant is designed and built by us.
                    The whole process is the result of domestic science and technology, local character but global
                    ambitions. We have capacities that currently reach up to 100,000 units of products per day. The
                    production process is fully automated and rounded, so our workers perform their jobs with a smile on
                    their face in pleasant conditions and atmosphere. We strive to be a socially responsible company. We
                    cooperate exclusively with domestic manufacturers and suppliers and try to proudly maintain the
                    slogan "Made in Serbia". We guarantee the perfect price-quality ratio of our products.</p>
            </div>
            <div class="row pb-5 mt-0 mb-0">
                <p><span class="aboutSpan">Quality</span> of My spoon products is based on completely
                    natural ingredients, such as fresh eggs and natural, distilled honey with geographical origin. The
                    percentage of honey is as much as 14%. There are no artificial additives, preservatives or GMO
                    ingredients in our products. As lovers of healthy food, we have omitted the aforementioned additives
                    from our products because we consider them unhealthy and harmful. Our preservative is honey, and the
                    ingredients from which My spoon is made are the fruit of domestic production. A special
                    technological process allows My spoon products to be preserved in a natural way, so that all
                    ingredients, especially eggs, are perfectly stable and safe to use. All this makes the My spoon
                    edible spoon a perfect delicacy that you can use and consume without a guilty conscience, with
                    pleasure. The shelf life of the product is longer than 6 months.
                    We are supporters of hedonism and have tried to convey the spirit of hedonism to our product.
                    Therefore, you can find My Spoon in the original flavor, but also in cinnamon and cocoa flavors.
                    Each of the My spoon flavors is unique in its own way, and it remains for you to choose your
                    favorite. Our recommendation is definitely to try them all because they are of equal quality, very
                    interesting, and given that their caloric value is more than acceptable, we assure you that you will
                    enjoy them. you can let go completely. Satisfaction is guaranteed.</p>
            </div>
            <div class="row pb-5 mt-0 mb-0">
                <p><span class="aboutSpan">Use</span> of My spoon products is a product of your
                    imagination and ours. The spoon is a 2-in-1 product that replaces both the spoon and the dessert
                    served with coffee. You can mix coffee, tea, hot chocolate, you can consume honey, natural jams,
                    creams, while snacking and enjoying at the same time. Trust us, the flavor combinations are
                    fantastic and limitless.</p>
            </div>
            <div class="row pb-5 mt-0 mb-0">
                <p><span class="aboutSpan">Nutrition</span> of natural honey, fresh eggs and cereals makes My spoon
                    products a perfect treat for
                    children, which can replace classic industrial sweets and at the same time have fun playing with
                    flavors and enjoying the shape and crunchiness of the spoon.</p>
            </div>
            <div class="row pb-5 mt-0 mb-0">
                <p><span class="aboutSpan">Honey</span> is one of the best natural products because it has
                    numerous medicinal and nutritional properties, which make it an indispensable part of a healthy
                    diet. My spoon spoons contain 14% honey that is produced on the territory of the Special Nature
                    Reserve "Deliblatska Peščara" within the beekeeping associations that possess all the necessary
                    certificates that are proof of traditional quality.</p>
            </div>
            <div class="row pb-5 mt-0 mb-0">
                <p><span class="aboutSpan">Practical packaging</span> makes using the product even
                    more
                    interesting. We strive to provide our customers with maximum enjoyment at every moment and in every
                    aspect in packaging that will protect the product and allow the customer easy access and use.</p>
            </div>
            <div class="row mt-0 mb-0">
                <p><span class="aboutSpan">Smile</span> is our trademark and it represents the essence we strive for
                    because we want to put a smile
                    on your faces and spice up your moments of relaxation with a touch of pure hedonism.</p>
            </div>
    </section>
    <section class="footer mt-5" id="footer">
        <div class="container">
            <div class="row pb-0 pt-5 mt-0 mb-0">
                <div class="col-12 text-start">
                    <img src="images/logo-white.png" alt="Logo" width="197" height="47">
                </div>
            </div>
            <div class="row pt-3 pb-2 mt-0 mb-0">
                <div class="col-md-4 text-start" id="footerFirm">
                    <p class="footerText">My Spoon d.o.o.<br>
                        Banatski Karlovac, Serbia<br>
                        Identification number: 21515230<br>
                        Tax identification number : 111641951<br>
                        Monday-Friday 08.00-16.00h (UTC +1 CET)
                    </p>
                </div>
                <div class="col-md-4 text-center" id="footerContact">
                    <p class="contact"><span id="footerH">Contact</span><br>
                        <a href="#">+381 13 652 139</a><br>
                        <a href="#">+381 62 63 63 98</a><br>
                        <a href="#">office@myspoon.eu</a>
                    </p>
                </div>
                <div class="col-md-4 text-center" id="sitemap">
                    <p class="contact"><span id="footerH">Sitemap</span><br>
                        <a href="#">Homepage</a><br>
                        <a href="#">Blog</a><br>
                        <a href="#">News</a>
                    </p>
                </div>
            </div>
            <div class="row pb-2 pt-0 mt-0 mb-0">
                <div class="col-12 text-center">
                    <p id="copyright"><span>&#169;</span> 2022 MySpoon | Edible cutlery</p>
                </div>
            </div>
        </div>
    </section>





    <script>
        const navEl = document.querySelector('.navbar');

        window.addEventListener('scroll', () => {
            if (window.scrollY >= 300) {
                navEl.classList.add('scrolled');
            } else if (window.scrollY < 300) {
                navEl.classList.remove('scrolled');
            }
        });
    </script>
    <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>