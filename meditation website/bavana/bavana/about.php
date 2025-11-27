<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="with=device-width,initial-scale=1.0">
    <title> Meditation </title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,700&family=Raleway:wght@300&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section class="about-header">
        <nav>
            <a href="index.php"><img src="image/Logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>

                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="books.php">BOOKS</a></li>
                    <li><a href="class.php">CLASS</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) : ?>
                        <li><a href="logout.php">LOGOUT</a></li>
                    <?php else : ?>
                        <li><a href="login.php">LOGIN</a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div>
            <img src="image/BGabout.jpg" alt="Snow" style="width:100%;height: 600px;">
            <div class="text-box">
                <h1>About Meditation</h1>
            </div>
        </div>
        <!-- about us content-->
        <section class="about-meditation">

            <div>
                <div class="about-col">
                    <h1>What Is Meditation</h1>
                    <p style="line-height:180%"> Meditation is a practice that involves focusing the mind and achieving a state of mental clarity, relaxation, and heightened awareness. It has been practiced for centuries
                        in various cultures and is often associated with spiritual and religious traditions, but it can also be approached from a secular perspective.The primary goal of meditation is to
                        cultivate a deep sense of presence and mindfulness. Different meditation techniques exist, but most involve finding a quiet space, assuming a comfortable posture, and directing attention
                        to a specific point of focus, such as the breath, a mantra, or a visual object.Through consistent practice, meditation can bring about various physical, mental, and emotional benefits.
                        These may include reduced stress, improved concentration, enhanced self-awareness, increased emotional well-being, and a greater sense of inner peace. Additionally, research suggests
                        that meditation can have positive effects on aspects of brain function and may contribute to overall mental and physical health.Meditation is accessible to people of all ages and backgrounds,
                        and there are numerous styles and approaches to suit individual preferences. It's important to note that meditation is a skill that develops over time, and regular practice is key to experiencing its
                        full range of benefits.
                    </p>
                </div>
                <div class="ad-meditation">
                    <h1>Benifits You Get</h1>
                    <ul style="line-height:180%">
                        <li>Reduced stress: Meditation may decrease stress. It can also improve symptoms of stress-related conditions, including irritable bowel syndrome (IBS), post-traumatic stress disorder (PTSD) and fibromyalgia</li>
                        <li>Improved memory: Better focus through regular meditation may increase memory and mental clarity. These benefits can help fight age-related memory loss and dementia.</li>
                        <li>Increased attention: Meditation helps with attention span, allowing you to stay focused longer.</li>
                        <li>Enhanced willpower: Meditation develops the mental discipline needed to avoid unhelpful habits</li>
                        <li>Better sleep: Meditation can shorten the time it takes to fall asleep and improve sleep quality.</li>
                        <li>Less pain: Meditation can reduce pain and boost emotion regulation. Together with medical care, this may help treat chronic pain.</li>
                        <li>Lower blood pressure: Blood pressure decreases during meditation and over time in people who meditate regularly. This can reduce strain on the heart and blood vessels and help prevent heart disease.</li>
                        <li>Less anxiety: Regular meditation helps reduce anxiety. It can also help with mental health issues like social anxiety, fears and obsessive-compulsive behaviors.</li>
                        <li>Less depression: Meditation can help reduce the occurrence of depression.</li>
                        <li>Greater compassion: Meditation can help you better understand yourself, find your best self, and increase positive feelings and actions toward others.</li>
                    </ul>


                </div>
            </div>
        </section>
        <section class="hand-position">
            <h1>Top Mudras For Meditation</h1>
            <div>
                <img src="image/mudras.jpg" alt="image">
                <div>
                    <h2> Bhairava Mudra </h2>
                    <p>Bhairava symbolizes the menacing avatar of Lord Shiva. This mudra is the gateway to find the deep meaning towards oneself, as it destroys the layer of egoism, that prevents you to appreciate the beautiful world.</p>
                    <br>
                    <h2> How to Do Bhairava Mudra Meditation</h2>
                    <ul style="line-height:180%">
                        <li>Sit in a comfortable sitting posture like Padmasana (Lotus Pose), Sukhasana (Easy Pose).</li>
                        <li>Bring your hand on to your lap. From here, place right hand over your left hand in way that the back of your right four fingers rest on the left palm and vice versa.</li>
                        <li>Now, maintain the posture and remain there for few breaths.</li>
                    </ul>
                </div>
                <br>
                <br>
                <div>
                    <h2> Dhyana Mudra </h2>
                    <p>Dhyana can be better understood by lighting up on its root terms ‘Dhi‘ and ‘Yana‘. The process of thinking or perceiving is called ‘Dhi‘ and ‘Yana‘ is the vehicle or practice of moving.</p>
                    <br>
                    <h2> How to Do Dhyana Mudra Meditation</h2>
                    <ul style="line-height:180%">
                        <li>First of all, go for any comfortable posture, Sukhasana (easy pose), Padmasana (Lotus Pose).</li>
                        <li>Bring your both hand in your lap and place your right hand over the left.</li>
                        <li>Now, attach both thumbs to each other giving the shape of a triangle in the palm.</li>
                        <li>Keep into the posture by focusing on the breath. This will boost your meditation practice..</li>
                    </ul>
                </div>
                <br>
                <br>
                <div>
                    <h2> Shuni Mudra </h2>
                    <p>Shuni represents ‘openness and emptiness’. This mudra balances the affects of excess of space element in the body. Meditation unites, as the too much of space elements causes detachment from the present situation.</p>
                    <br>
                    <h2> How to Do Shuni Mudra Meditation</h2>
                    <ul style="line-height:180%">
                        <li>Go for a sitting posture like Padmasana (Lotus Pose), Sukhasana (Easy Pose).</li>
                        <li>Now, bend the middle finger and bring it to contact with the thumb tip. Apply gentle pressure over it by the thumb.</li>
                        <li>Maintain posture and breathe here to deepen your meditation practice.</li>
                    </ul>
                </div>
                <br>
                <br>
                <div>
                    <h2> Varada Mudra</h2>
                    <p>Varada Mudra is a term derived from Sanskrit root. Here, “Varada” refers to “granting of wishes” or “boons” and mudra is “hand seal” or “gesture”.</p>
                    <br>
                    <h2> How to Do Varada Mudra Meditation</h2>
                    <ul style="line-height:180%">
                        <li>First of all,Sit in a meditative posture with an erect spine.</li>
                        <li>Place the hands on your knees.</li>
                        <li>Open the left palm forward so that the palm lies above the fingers.</li>
                        <li>All the fingers are kept extended or slightly bent towards the ground.</li>
                    </ul>
                </div>
                <br>
                <br>
                <div>
                    <h2> Apana Mudra </h2>
                    <p>Apana mudra is a basic hasta mudra or yoga hand gesture that promotes the downward movement of energy in the body. It’s linked with Apana Vayu, one of the five prana vayus according to yogic tradition.</p>
                    <br>
                    <h2> How to Do Apana Mudra Meditation</h2>
                    <ul style="line-height:180%">
                        <li>Sit comfortably on your yoga mat in a meditative position such as the lotus pose (padmasana) or easy pose (sukhasana). Your spine should be straight and your head properly aligned.</li>
                        <li>Close your eyes and place your hands on your thighs or knees with palms up.</li>
                        <li>Join the tip of the thumb to the tips of the ring and middle finger on both hands. The index finger and little finger should be kept straight, yet relaxed. Keep moderate pressure on the tips.</li>
                        <li>Initially hold the mudra for a minimum of 10 minutes. Extend this duration up to 20 minutes.</li>
                        <li>Slowly separate your finger and keep your eyes closed for another couple of minutes.</li>
                        <li>Sit in silence before you get up from your position.</li>
                    </ul>
                </div>
            </div>
            <br>
            <br>
            <div>
                <h2> Ganesha Mudra </h2>
                <p>Ganesha mudra is a gesture made using both hands (hasta yoga mudra) to strengthen the heart, both physically & emotionally. In this mudra, when both hands are clasped at chest level, it shows the meeting point of the physical and heart strength.</p>
                <br>
                <h2> How to Do Ganesha Mudra Meditation</h2>
                <ul style="line-height:180%">
                    <li>Bring your palms together to make Anjali Mudra.Hold your left hand before the chest with the palm facing outward and bend the fingers</li>
                    <li>Now grasp the left hand with the right hand with the palm facing inward.</li>
                    <li>See that both the hands are clasped. Bent fingers are hooked & locked.Inhale deep and on exhale vigorously pull the hands apart without releasing the grip.</li>
                    <li>Feel the stretch along your shoulders and chest.Inhale and let go of the tension.</li>
                    <li>Repeat 6 times the entire process.Now reverse the hand positions and again do the exercise 6 times.</li>
                </ul>
            </div>
            </div>
            <br>
            <br>
            <div>
                <h2> Gyan Mudra </h2>
                <p>Gyan Mudra is a mystic position of the thumb and index finger depicting a gesture of supreme knowledge.</p>
                <br>
                <h2> How to Do Gyan Mudra Meditation</h2>
                <ul style="line-height:180%">
                    <li>Come into a comfortable in a meditative posture like Padmasana, Sukhasana, or sit on a chair keeping the spine straight.</li>
                    <li>Bring your hands on the knees, open your palm facing upward and stretch your finger gently.</li>
                    <li>Keep the other three fingers relaxed or slightly stretched.</li>
                    <li>Now close your eyes and concentrate on breathing. Watch your breath entering and exiting through nostrils then slowly shift your focus to the third eye chakra.</li>
                </ul>
            </div>
            </div>

            <br>
            <br>
            <div>
                <h2> Karana Mudra </h2>
                <p>Its description is mostly found in the Buddhist tradition as Gautam Buddha is generally portrayed meditating in Karana mudra. Karana Mudra signifies the warding off evil and negative energies. The religious and cultural beliefs suggest that Karna mudra helps remove mental blocks.</p>
                <br>
                <h2> How to Do Karana Mudra Meditation</h2>
                <ul style="line-height:180%">
                    <li>Bring your right hand to your chest level.Place it either vertically or horizontally opening the palm forward.</li>
                    <li>Flex your middle and ring finger towards the center of the palm.Bend to thumb inwards to hold down the flexed fingers.</li>
                    <li>Straighten the index and little finger and extend them upward.Place the left hand on the left knee with palm facing up.</li>
                </ul>
            </div>
            </div>



        </section>
        <!---- contact  -->
        <section class="cta">
            <h1>For More Information Contact Us</h1>
            <a href="contact.php" class="more-btn">CONTACT US</a>
        </section>

        <script>
            var navLinks = document.getElementById("navLinks");

            function showMenu() {
                navLinks.style.right = "0";
            }

            function hideMenu() {
                navLinks.style.right = "-200px";
            }
        </script>


</body>

</html>