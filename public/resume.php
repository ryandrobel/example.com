<?php

//Build the page metadata
$meta = [];
$meta['description'] = "Resume MicroTrain2101 For Web Development";
$meta['keywords'] = "resume, MicroTrain2101, Web development, web development";


$content = <<<EOT
    <main>
        <section class="h">

            <h1>Ryan Drobel</h1>
            <p> 1117 North Wood Street &#9679; Chicago, IL 60622 &#9679;
                (480)352-9095 &#9679; ryandrobel@gmail.com
            </p>
            <p><a href="https://www.linkedin.com/in/ryan-drobel-40b59934/" target="_blank" rel="noopener">LinkedIn</a>
            </p>
            <p><a href="https://www.github.com/ryandrobel" target="_blank" rel="noopener">GitHub</a></p>
            <h2>Full Stack Web and Hybrid Mobile Application Developer</h2>
        </section>

        <section>

            <h2 class="h">Professional Summary</h2>
            <p>Enthusiastic fullstack developer who enjoys learning and applying new technologies to solve complex
                business problems. Experienced in building full stack scalable web applications to create phenomenal
                user experiences. Excellent in building and maintaining client relationships and providing quality
                customer service. Passionate about teamwork and assisting companies and individuals in meeting their
                goals.</p>

        </section>

        <section>

            <h3 class="h">Core Competencies</h3>
            
                <ul class="table">
                    <li>Full Stack Development</li>
                    <li>Strong Analytical Skills</li>
                    <li>Hybrid Mobile Development</li>
                    <li>Savvy Problem Solver</li>
                    <li>Strong Leadership Skills</li>
                    <li>Well Organized</li>
                </ul>
           

        </section>

        <section>

            <h3 class="h">Certifications / Technical Proficiencies</h3>
            <ul>
                <li>Agile Fullstack Web and Hybrid Mobile Application Development - Graduation Date 4/20/2021</li>
                <li>Certified ScrumMaster(tm)</li>
                <li>Coding Dojo FullStack Bootcamp - <a
                        href="https://www.linkedin.com/in/ryan-drobel-40b59934/detail/overlay-view/urn:li:fsd_profileTreasuryMedia:(ACoAAAc0lAsBCyTvCYky88tHP03_sFvNZFu64Go,1594929836537)/">Link
                        To Certificate of Completion</a> </li>
                <li>FreeCodeCamp.org Certifications
                    <ul>
                        <li><a
                                href="https://www.freecodecamp.org/certification/fccdc3f9cf2-4801-48ab-934b-bfa9072c4802/responsive-web-design">Responsive
                                Web Design Certification (300 hours)</a></li>
                        <li><a
                                href="https://www.freecodecamp.org/certification/fccdc3f9cf2-4801-48ab-934b-bfa9072c4802/javascript-algorithms-and-data-structures">JavaScript
                                Algorithms and Data Structures Certification (300 hours)</a></li>
                    </ul>
                </li>

        </section>

        <section>

            <h2 class="h">Professional Experience</h2>



            <h3>Drobel Enterprises LLC, Phoenix, AZ</h3>
            <p>Window Covering Contractor 11/07/2017 - Present</p>

            <ul>
                <li>Subcontracting with window covering manufacturers and dealers to measure and install custom
                    window coverings.</li>
                <li>Accounting/Bookkeeping, management of companies profits and losses and budgeting.
                </li>
                <li>Installing window coverings (shutters, blinds, shades etc.)</li>
                <li>Providing customer service to the companies and their customers to ensure 100% client
                    satisfactions with products and services.</li>
            </ul>

        </section>

        <section>

            <h3>Ethos Geological</h3>
            <p>Field Services Technician 03/25/2018 – 08/22/2018</p>

            <ul>
                <li>Engaged in claim-staking activities in multiple locations across the Western United States
                    in
                    order to initiate soil sampling processes.</li>
                <li>Sampled soil for specific minerals including cobalt, copper, and gold.
                </li>
                <li> waypoint data to label individual samples with longitude and latitude points to determine
                    mineral rich areas for further mining and discovery.
                </li>
            </ul>

        </section>

        <section>

            <h3>Animal House Strength and Conditioning</h3>
            <p>Founder, CEO &amp; Operator 03/15/2013 – 12/15/2017</p>

            <ul>
                <li>Oversaw the operations of multiple fitness facilities in the Metro Phoenix area.
                </li>
                <li>Provided education and support to employees. </li>
                <li>Managed memberships and billing.</li>
                <li>Conducted marketing/advertising activities to promote the business and gain a steady flow of
                    clientele.</li>
                <li>Build relationships with other local businesses through cross referrals, organizing
                    competitions, charities, and other events. </li>
            </ul>

        </section>

    </main>
    EOT;

    include '../core/layout.php';