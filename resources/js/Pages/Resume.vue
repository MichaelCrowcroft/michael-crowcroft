<script setup>
import Layout from '@/Layouts/Layout.vue';
import Container from '@/Components/Container.vue';
import { Head, Link } from '@inertiajs/vue3';


</script>

<template>
    <Head>
        <title>Michael Crowcroft's Résumé</title>
        <link rel="canonical" href="https://www.michaelcrowcroft.com/resume" />
    </Head>

    <Layout>
        <div class="flex flex-wrap items-center lg:h-screen xl:h-screen 2xl:h-screen
                    text-center lg:text-left xl:text-left 2xl:text-left p-5 md:p-10
                    lg:p-20 xl:p-20 2xl:p-20">
            <div class="w-full lg:w-2/5 xl:w-2/5 2xl:w-2/5 lg:pr-8 xl:pr-8 2xl:pr-8">
                <h1 class="leading-none font-serif text-5xl">Looking to Hire?</h1>
                <h3 class="font-serif text-3xl">I'm looking to get hired 🤝</h3>
                <p>(Not hiring? You can <Link class="text-teal-800 hover:underline" href="/">go home</Link>)</p>
                <hr class="block border-t-1 border-gray-400 mx-auto my-6"/>
                <div class="flex justify-between items-center space-x-4">
                    <p>Reach out at <a class="text-teal-800 hover:underline" href="mailto:michaelcrowcroft@outlook.com">michaelcrowcroft@outlook.com</a></p>
                </div>
                <hr class="block border-t-1 border-gray-400 mx-auto my-6"/>
            </div>
            <div class="w-full overflow-scroll max-h-full lg:w-3/5 xl:w-3/5 2xl:w-3/5 lg:pl-8 xl:pl-8 2xl:pl-8">
                <hr class="block border-t-1 border-gray-900 mx-auto my-6"/>
                <Container>
                    <a class="hover:underline text-teal-800" href="https://drive.google.com/uc?export=download&id=1UXphgv8y-q9OwRm9GPOS7cqgpMRQ2Xyb">
                        Download PDF Copy 🔗
                    </a>
                </Container>
                <hr class="block border-t-1 border-gray-900 mx-auto my-6"/>
                <Container>
                    <h3 class="text-2xl font-serif font-black mb-4">
                        Outline
                    </h3>
                    <p>I am an experienced marketer with a broad skill set across market research, media and analytics. I am looking for opportunities to build a team that works across marketing to provably impact the business bottom line.</p>
                </Container>
                <hr class="block border-t-1 border-gray-900 mx-auto my-6"/>
                <Container>
                    <h3 class="text-2xl font-serif font-black mb-4">
                        Work Experience
                    </h3>
                    <h4 class="text-lg italic text-gray-800">
                        <span class="font-black">Xero</span> | Digital Media Lead
                    </h4>
                    <h5 class="text-md text-gray-800">
                        September 2021 – Present, Toronto
                    </h5>
                    <p class="mb-6">I currently manage the paid media team responsible for New Zealand and North America. Day to day my team responds to campaign briefs and provides strategy and implementation across display, video, paid social, and SEM advertising. More broadly we also provide yearly media investment recommendations to senior management, and lead technical integrations with ads platforms and various tech platforms (through tag manager and conversion APIs).</p>

                    <h4 class="text-lg italic text-gray-800">
                        <span class="font-black">Xero</span> | Senior Marketing Analyst
                    </h4>
                    <h5 class="text-md text-gray-800">
                        Nov 2020 – August 2021, Auckland
                    </h5>
                    <p class="mb-6">I was responsible for a small team overseeing data management and analysis across Xero’s global brand team. This involved analyzing and segmenting our existing customers based on product utilization in order to deliver direct marketing comms, and develop propensity models to understand which customers are most likely to add on additional services, or churn.</p>

                    <h4 class="text-lg italic text-gray-800">
                        <span class="font-black">Xero</span> | Marketing and Acquisition Specialist
                    </h4>
                    <h5 class="text-md text-gray-800">
                        Apr 2019 – Nov 2020, Auckland
                    </h5>
                    <p class="mb-6">This role involved supporting a small team responsible for Xero’s digital media planning and buying across NZ and SEA.  This role involved owning the relationship with regional marketing directors, and working closely with them to develop media plans to achieve their brand and acquisition goals.</p>

                    <h4 class="text-lg italic text-gray-800">
                        <span class="font-black">Ogilvy</span> | Media Planner
                    </h4>
                    <h5 class="text-md text-gray-800">
                        Jan 2018 – Apr 2019, Auckland
                    </h5>
                    <p class="mb-6">I built strong relationships with key media clients while at Ogilvy. Off the back of this, I was offered to move into the media team. The core function of my role was channel agnostic media planning for Countdown (New Zealand’s largest supermarket). I also had a close relationship with Countdown’s digital division (CountdownX), and data agency as we looked at ways to activate shopping data in media.</p>

                    <h4 class="text-lg italic text-gray-800">
                        <span class="font-black">Ogilvy</span> | Marketing Analyst
                    </h4>
                    <h5 class="text-md text-gray-800">
                        Mar 2017 – Jan 2018, Auckland
                    </h5>
                    <p class="mb-6">My main responsibility as a Marketing Analyst  was to understand the overall effectiveness of our client’s advertising. This included looking at ways to measure media performance across multiple media channels. I also lead customer research projects, and developed reports which fed into the brand planning team for creative briefs and pitches.</p>

                    <h4 class="text-lg italic text-gray-800">
                        <span class="font-black">Prominence</span> | Digital Marketing Specialist
                    </h4>
                    <h5 class="text-md text-gray-800">
                        Nov 2015 – Feb 2017, Auckland
                    </h5>
                    <p class="mb-6">In this role my attention was focused into three main areas - managing client media accounts, planning direct marketing campaigns, and overseeing website development projects.</p>
                </Container>
                <hr class="block border-t-1 border-gray-900 mx-auto my-6"/>
                <Container>
                    <h3 class="text-2xl font-serif font-black mb-4">
                        Education
                    </h3>
                    <h4 class="text-lg italic text-gray-800">
                        <span class="font-black">Massey University</span> | Bachelor of Business (Marketing Major)
                    </h4>
                    <p>While studying marketing I focused my paper choices around consumer behavior, market research and product development with electives outside of marketing in statistics and computer science. I excelled in consumer behavior earning top in class honors.</p>
                </Container>
                <hr class="block border-t-1 border-gray-900 mx-auto my-6"/>
                <Container>
                    <h3 class="text-2xl font-serif font-black mb-4">
                        Technical Skills
                    </h3>
                    <ul class="list-disc ml-8">
                        <li>Experience with various statistical tools and languages including Excel, Python, SQL and BigQuery.</li>
                        <li>Deep knowledge of major ad platforms - Meta, Google Marketing Platform, LinkedIn, Various DSPs etc.</li>
                        <li>Proficient in stakeholder and budget management, have been responsible for seven figure media budgets.</li>
                        <li>Experienced across digital analytics platforms and integrating serverside cookieless analytics solutions.</li>
                    </ul>
                </Container>
                <hr class="block border-t-1 border-gray-900 mx-auto my-6"/>

            </div>
        </div>
    </Layout>
</template>