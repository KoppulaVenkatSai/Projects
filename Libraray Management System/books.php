<html>
<head>
    <title>Books</title>
    <link rel="stylesheet" href="books.css">
</head>
<body>
    <div class="scroll">
        <div id="progressbar"></div>
    </div>
    
    <div class="loadingcon">
        <div class="loading-text">
            <div class="loading-main-text">
                <h4>Loading:</h4>
            </div>
            <div class="loading-sub-text">
                <div class="loading-info" id="loadingtext1"><p>Downloading Images</p></div>
                <div class="loading-info" id="loadingtext2"><p>Rendering Images</p></div>
                <div class="loading-info" id="loadingtext3"><p>Finalizing...</p></div>
            </div>
        </div>
        <div class="loadingbar">
            <div id="loading-progress"></div>
        </div>
    </div>
    <?php
        $conn = new mysqli('localhost','root', '', 'LMS-PROJ');
        $booksquantity = array();
        $select = $conn -> query("select quantity from books;");

        foreach ($select as $row) {
            array_push($booksquantity, $row['quantity']);
        }
    ?>
    <div class="container">
        <section id="scroll-study-books"></section>
        <div class="navdiv">
            <div class="nav-sub-div">
                <ul>
                    <li class="navlist" id="study-li">
                        <a onclick="studydiv()" href="#scroll-study-books">Study Books</a>
                    </li>
                    <li class="navlist" id="story-li">
                        <a onclick="storydiv()" href="#scroll-story-books">Story Books</a>
                    </li>
                    <li class="navlist" id="biography-li">
                        <a onclick="biographydiv()" href="#scroll-biography-books">Biography Books</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="booksdiv">
            <h1 class="heading" id="study-heading" align="center">Study Books</h1>
            <div id="study" class="category">
                <div class="card">
                        <img src="./images/books/study-books/AI.png" alt="AI">
                        <div class="bookinfo">
                            <div class="book-info-key">
                                <h4 class="book-id-key">Book Id:</h4>
                                <h4 class="book-name-key">Name:</h4>
                                <h4 class="book-space">More:</h4>
                                <h4 class="book-quantity-key">Quantity:</h4>
                            </div>
                            <div class="book-info-value">
                                <p class="book-id-value">1001</p>
                                <p class="book-name-value">Artificaial Intelligence</p>
                                <p>A Modern Approach</p>
                                <p><?php echo $booksquantity[0]; ?></p>
                            </div>
                        </div>
                </div>
                <div class="card">
                    <img src="./images/books/study-books/DAA.png" alt="DAA">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-space">More:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">1002</p>
                            <p class="book-name-value">Design and Analysis</p>
                            <p> of Algorithms</p>
                            <p><?php echo $booksquantity[1]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/study-books/DIP.png" alt="DIP">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-space">More:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">1003</p>
                            <p class="book-name-value">Digital Image</p>
                            <p>Processsing</p>
                            <p><?php echo $booksquantity[2]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/study-books/ED.png" alt="ED">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-space">More:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">1004</p>
                            <p class="book-name-value">Engineering</p>
                            <p>Drawing</p>
                            <p><?php echo $booksquantity[3]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/study-books/FDBS.png" alt="FDBS">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-space">More:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">1005</p>
                            <p class="book-name-value">Fundamentals of</p>
                            <p>Database Systems</p>
                            <p><?php echo $booksquantity[4]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/study-books/HEM.png" alt="HEM">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-space">More:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">1006</p>
                            <p class="book-name-value">Higher Engineering</p>
                            <p>Mathematics</p>
                            <p><?php echo $booksquantity[5]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/study-books/java.png" alt="Java">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-space">More:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">1007</p>
                            <p class="book-name-value">Java The Complete</p>
                            <p>Reference</p>
                            <p><?php echo $booksquantity[6]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/study-books/OSC.png" alt="OSC">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-space">More:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">1008</p>
                            <p class="book-name-value">Operating System</p>
                            <p>Concepts</p>
                            <p><?php echo $booksquantity[7]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/study-books/PP.png" alt="PP">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-space">More:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">1009</p>
                            <p class="book-name-value">Python Programming</p>
                            <p>using PS approach</p>
                            <p><?php echo $booksquantity[8]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/study-books/WT.png" alt="WT">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-space">More:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                            <section id="scroll-story-books"></section>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">1010</p>
                            <p class="book-name-value">Web Technologies</p>
                            <p>black book</p>
                            <p><?php echo $booksquantity[9]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="heading" id="story-heading" align="center">Story Books (Movies from books)</h1>
            <div id="story" class="category">
                <div class="card">
                    <img src="./images/books/story-books/avengersendgame.png" alt="Avengers Endgame">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">2001</p>
                            <p class="book-name-value">Avengers Endgame</p>
                            <p><?php echo $booksquantity[10]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/story-books/beautyandthebeast.png" alt="Beauty And The Beast">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">2002</p>
                            <p class="book-name-value">Beauty and the Beast</p>
                            <p><?php echo $booksquantity[11]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/story-books/conjuring.png" alt="Conjuring">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">2003</p>
                            <p class="book-name-value">The Conjuring</p>
                            <p><?php echo $booksquantity[12]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/story-books/godzillvskong.png" alt="Godzilla VS Kong">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">2004</p>
                            <p class="book-name-value">Godzilla VS Kong</p>
                            <p><?php echo $booksquantity[13]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/story-books/GOT.png" alt="GOT">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">2005</p>
                            <p class="book-name-value">Game of Thrones</p>
                            <p><?php echo $booksquantity[14]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/story-books/harrypotter.png" alt="Harry Potter">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">2006</p>
                            <p class="book-name-value">Harry Potter</p>
                            <p><?php echo $booksquantity[15]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/story-books/jurassicpark.png" alt="Jurassic Park">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">2007</p>
                            <p class="book-name-value">Jurassic Park</p>
                            <p><?php echo $booksquantity[16]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/story-books/narnia.png" alt="Narnia">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">2008</p>
                            <p class="book-name-value">The Cronicles of Narnia</p>
                            <p><?php echo $booksquantity[17]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/story-books/piratesofthecarribean.png" alt="Pirates Of The Carribean">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">2009</p>
                            <p class="book-name-value">Pirates of the Carribean</p>
                            <p><?php echo $booksquantity[18]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/story-books/residentevil.png" alt="Resident Evil">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                            <section id="scroll-biography-books"></section>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">2010</p>
                            <p class="book-name-value">Resident Evil</p>
                            <p><?php echo $booksquantity[19]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="heading" id="biography-heading" align="center">Biography Books</h1>
            <div id="biography" class="category">
                <div class="card">
                    <img src="./images/books/biography-books/alanturing.png" alt="Alan Turing">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-about-key">About:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">3001</p>
                            <p class="book-name-value">Alan Turing: The Enigma</p>
                            <p class="book-about-value">Alan Turing</p>
                            <p><?php echo $booksquantity[20]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/biography-books/billgates.png" alt="Bill Gates">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-about-key">About:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">3002</p>
                            <p class="book-name-value">Bill Gates A Biograbhy</p>
                            <p class="book-about-value">Bill Gates</p>
                            <p><?php echo $booksquantity[21]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/biography-books/einstein.png" alt="Einstein">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-about-key">About:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">3003</p>
                            <p class="book-name-value">Einstein Life and Universe</p>
                            <p class="book-about-value">Albert Einstein</p>
                            <p><?php echo $booksquantity[22]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/biography-books/frida.png" alt="Frida">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-about-key">About:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">3004</p>
                            <p class="book-name-value">Frida</p>
                            <p class="book-about-value">Frida Kahlo</p>
                            <p><?php echo $booksquantity[23]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/biography-books/longwalktofreedom.png" alt="Long Walk Of Freedom">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-about-key">About:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">3005</p>
                            <p class="book-name-value">Long Walk to freedom</p>
                            <p class="book-about-value">Nelson Mandela</p>
                            <p><?php echo $booksquantity[24]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/biography-books/myexperienceswithtruth.png" alt="My Experiences With Truth">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-about-key">About:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">3006</p>
                            <p class="book-name-value">Satya ke Prayog</p>
                            <p class="book-about-value">MK Gandhi</p>
                            <p><?php echo $booksquantity[25]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/biography-books/myinventions.png" alt="My Inventions">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-about-key">About:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">3007</p>
                            <p class="book-name-value">My Inventions</p>
                            <p class="book-about-value">Nikola Tesla</p>
                            <p><?php echo $booksquantity[26]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/biography-books/stevejobs.png" alt="Steve Jobs">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-about-key">About:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">3008</p>
                            <p class="book-name-value">Steve Jobs</p>
                            <p class="book-about-value">Steve Jobs</p>
                            <p><?php echo $booksquantity[27]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/biography-books/teamofrivals.png" alt="Team Of Rivals">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-about-key">About:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">3009</p>
                            <p class="book-name-value">Team of Rivals</p>
                            <p class="book-about-value">Abraham Linkoln</p>
                            <p><?php echo $booksquantity[28]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/books/biography-books/wingsoffire.png" alt="Wings Of Fire">
                    <div class="bookinfo">
                        <div class="book-info-key">
                            <h4 class="book-id-key">Book Id:</h4>
                            <h4 class="book-name-key">Name:</h4>
                            <h4 class="book-about-key">About:</h4>
                            <h4 class="book-quantity-key">Quantity:</h4>
                        </div>
                        <div class="book-info-value">
                            <p class="book-id-value">3010</p>
                            <p class="book-name-value">Wings of Fire</p>
                            <p class="book-about-value">APJ Abdul Kalam</p>
                            <p><?php echo $booksquantity[29]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="books.js"></script>
</body>
</html>