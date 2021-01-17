<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>about</title>

    <style>
        .abtinfo {
            font-size: 20px;
            line-height: 2.4;
        }

        @media(max-width:991px) {

            .abtinfo {
                font-size: 14px;
                line-height: 2;
            }
            
            .text{
                font-size: .78rem;
            }
        }

    </style>
</head>

<body>
    <?php include'header.php'?>
    <section class="text-gray-600 body-font" id="about">
        <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
            <img data-aos="zoom-in" data-aos-duration="2000" class="lg:w-2/6 md:w-3/6 w-5/6 mb-12 object-cover object-center " alt="hero" src="images/about.png">
            <div class="text-center lg:w-2/3 w-full">
                <h1 data-aos="fade-right" data-aos-duration="2000" class="title-font sm:text-4xl text-3xl mb-4 font-medium text-yellow-600">Vishal Sathwara</h1>
                <p class="mb-8  abtinfo" data-aos="flip-left" data-aos-duration="2000" data-aos-delay="600">Hey Everyone.<br> I'm an I.T(information technology) Engineer by profession but I'm so much passionate about Music And Dancing.<br>So as a Music producer , Dancer and Choreographer I would love to teach and share the knowledge with you all.</p>
                <div class="flex justify-center">
                   <a href="music.php" style="cursor:pointer"><button data-aos="fade-right" data-aos-duration="1000" class="inline-flex text-black  border-0 py-2 px-6 focus:outline-none rounded text hvr-shutter-in-horizontal">My Music</button></a> 
                    <a href="isotope.php" style="cursor:pointer">  <button data-aos="fade-up" data-aos-duration="1000" class="ml-4 inline-flex text-black border-0 py-2 px-6 focus:outline-none  rounded text hvr-shutter-in-horizontal">Watch Videos</button></a>
                </div>
            </div>
        </div>
    </section>

    <?php include'footer.php'?>
</body>

</html>
