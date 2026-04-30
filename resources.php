<!DOCTYPE html>
<html lang="en">
<head>
<?php
$pageTitle = "Resources | GlobeCoRe Inc. Atlanta, GA";
include_once "partials/head.php";
?>
</head>

<body class="font-raleway text-textMain bg-bgOffWhite">
    <?php include "partials/header.php"; ?>

    <!-- Creative Hero Section -->
    <section class="relative pt-32 pb-40 lg:pt-40 lg:pb-48 overflow-hidden bg-[#071e26]">
        <div class="absolute inset-0">
            <img src="/assets/wp-content/uploads/2026/04/image-globecore-1.jpg" alt="Resources"
                class="w-full h-full object-cover opacity-20 mix-blend-overlay filter blur-[2px]">
            <div class="absolute inset-0 bg-gradient-to-t from-[#071e26] via-[#071e26]/80 to-transparent"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10 text-center">
            <div class="inline-flex items-center gap-2 bg-secondary/20 border border-secondary/30 rounded-full px-5 py-2 mb-8 backdrop-blur-md">
                <span class="w-2 h-2 bg-secondary rounded-full animate-pulse"></span>
                <span class="text-white text-xs font-bold tracking-[0.2em] uppercase">Knowledge Base</span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-7xl font-extrabold text-white leading-tight mb-8 tracking-tight drop-shadow-2xl">
                Curated Resources
            </h1>
            <p class="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto font-medium leading-relaxed drop-shadow-md">
                The following article links, books, and exercises are recommended to provide you with additional insights, education, and online mental health care support.
            </p>
        </div>

        <!-- Custom Wave Divider -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none drop-shadow-lg text-bgOffWhite">
            <svg fill="currentColor" viewBox="0 0 1200 120" preserveAspectRatio="none"
                class="w-full h-[60px] md:h-[100px]">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C52.16,108.83,106.6,117.8,162,118.8,216.7,119.78,271.69,103.55,321.39,56.44Z">
                </path>
            </svg>
        </div>
    </section>

    <!-- Resources Content -->
    <main id="content" class="py-20 lg:py-28 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
            
            <?php
            $resourceCategories = [
                "Abuse" => [
                    ["title" => "The Claimant", "url" => "#", "type" => "[Book]"]
                ],
                "Addiction" => [
                    ["title" => "Understanding Relapse", "url" => "https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4553654/", "type" => "[Article]"],
                    ["title" => "Beyond Addiction: How Science and Kindness Help People Change", "url" => "https://www.amazon.com/Beyond-Addiction-Science-Kindness-People/dp/1476709475", "type" => "[Book]"]
                ],
                "ADHD/ADD" => [
                    ["title" => "Healing the 7 Types of ADD", "url" => "#", "type" => "[Book]"],
                    ["title" => "The ADHD Effect on Marriage", "url" => "https://www.amazon.com/ADHD-Effect-Marriage-Understand-Relationship/dp/1886941971", "type" => "[Book]"],
                    ["title" => "Smart but Scattered for Adults", "url" => "https://www.amazon.com/Smart-but-Scattered-Guide-Success/dp/1462516963", "type" => "[Book]"],
                    ["title" => "ADHD 2.0: New Science and Essential Strategies for Thriving with Distraction", "url" => "#", "type" => "[Book]"],
                    ["title" => "The Disintegrating Student: Struggling but Smart, Falling Apart, and how to turn it around", "url" => "https://www.jeanninejannot.com/book", "type" => "[Book]"]
                ],
                "Adoption" => [
                    ["title" => "Journey of the Adopted Self: A Quest for Wholeness", "url" => "https://www.amazon.com/Journey-Adopted-Self-Quest-Wholeness-ebook/dp/B00CW0M7Q6", "type" => "[Book]"],
                    ["title" => "The Primal Wound: Understanding the Adopted Child", "url" => "https://www.amazon.com/Primal-Wound-Understanding-Adopted-Child/dp/0963648004", "type" => "[Book]"]
                ],
                "Affair Recovery" => [
                    ["title" => "Getting Past the Affair: A Program to Help You Cope, Heal, and Move On", "url" => "https://www.amazon.com/Getting-Past-Affair-Program-Together/dp/157230801X", "type" => "[Book]"]
                ],
                "Aging Issues" => [
                    ["title" => "The 36 Hour Day", "url" => "https://www.amazon.com/36-Hour-Day-Alzheimer-Disease-Dementias/dp/1421441713", "type" => "[Book]"]
                ],
                "Anger & Aggression" => [
                    ["title" => "Anger & Aggression Fact Sheet", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/Anger-vs.-Agression-Fact-Sheet-Updated-1.pdf", "type" => "[Article]"],
                    ["title" => "Anger Management for Everyone: Seven Proven Ways to Control Anger", "url" => "https://www.amazon.com/Anger-Management-Everyone-Control-Happier/dp/1886230838", "type" => "[Book]"],
                    ["title" => "Overcoming Passive-Aggression: How To Stop Hidden Anger", "url" => "https://www.amazon.com/Overcoming-Passive-Aggression-Spoiling-Relationships-Happiness/dp/1569243611", "type" => "[Book]"],
                    ["title" => "The Surprising Purpose of Anger: Beyond Anger Management", "url" => "https://www.amazon.com/gp/product/1892005158", "type" => "[Book]"],
                    ["title" => "Mental Health Therapy: The DBT Anger Management Workbook", "url" => "https://www.amazon.com/DBT-Anger-Management-Workbook-Dialectical/dp/1774870126", "type" => "[Workbook]"]
                ],
                "Anxiety" => [
                    ["title" => "10 Best-Ever Anxiety Management Techniques", "url" => "https://www.amazon.com/Best-Ever-Anxiety-Management-Techniques-Understanding/dp/0393705560", "type" => "[Book]"],
                    ["title" => "Overcoming Anxiety, Worry and Peace: Practical Ways to Find Peace", "url" => "https://www.amazon.com/Overcoming-Anxiety-Worry-Fear-Practical/dp/0800719689", "type" => "[Book]"],
                    ["title" => "On Edge: A Journey Through Anxiety", "url" => "https://www.amazon.com/Edge-Journey-Through-Anxiety/dp/0553418572", "type" => "[Book]"],
                    ["title" => "Anxiety Tracking Form", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/Anxiety-Tracking-Form.pdf", "type" => "[Assessment]"],
                    ["title" => "Cognitive Behavioral Therapy (CBT) & Dialectical Behavioral Therapy (DBT) (2 in 1)", "url" => "https://www.walmart.com/ip/Cognitive-Behavioral-Therapy-CBT-Dialectical-DBT-2-1-How-CBT-DBT-ACT-Techniques-Can-Help-You-To-Overcoming-Anxiety-Depression-OCD-Intrusive-Thoughts--9781801342025/293120168", "type" => "[Book]"],
                    ["title" => "DBT Workbook for Adults: Develop Emotional Wellbeing", "url" => "https://www.amazon.com/DBT-Workbook-Adults-Emotional-Wellbeing/dp/1774870061", "type" => "[Workbook]"],
                    ["title" => "DBT Workbook for Anxiety: Dialectical Behavior Therapy Strategies", "url" => "https://www.amazon.com/DBT-Workbook-Anxiety-Dialectical-Strategies-ebook/dp/B09Y2BVXYG", "type" => "[Workbook]"],
                    ["title" => "The Anxiety and Depression Workbook", "url" => "https://www.amazon.com/Dialectical-Behavior-Therapy-Workbook-Anxiety/dp/1572249544", "type" => "[Workbook]"]
                ],
                "Autism/ASD" => [
                    ["title" => "When Your Man is on the Spectrum: To Know, Understand, & Transform Your Relationship", "url" => "https://a.co/d/04qOgWrQ", "type" => "[Book]"]
                ],
                "Attachment" => [
                    ["title" => "Healing the Fragmented Selves of Trauma Survivors", "url" => "https://www.amazon.com/Healing-Fragmented-Selves-Trauma-Survivors/dp/0415708230", "type" => "[Book]"],
                    ["title" => "Nurturing Resilience: Helping Clients Move Forward from Developmental Trauma", "url" => "https://www.amazon.com/Nurturing-Resilience-Developmental-Trauma-Integrative/dp/1623172039", "type" => "[Book]"]
                ],
                "Blended Families / Divorce" => [
                    ["title" => "The Smart Step Family: Seven Steps to a Healthy Family", "url" => "https://www.amazon.com/s?k=the+smart+stepfamily", "type" => "[Book]"],
                    ["title" => "The Smart Stepfamily Marriage", "url" => "https://www.amazon.com/Smart-Stepfamily-Marriage-Success-Blended/dp/0764213091", "type" => "[Book]"],
                    ["title" => "Becoming a Step Family", "url" => "https://www.amazon.com/Becoming-Stepfamily-Development-Remarried-Institute/dp/0881633097", "type" => "[Book]"],
                    ["title" => "All About Families: The Second Time Around", "url" => "https://www.amazon.com/All-About-Families-Parents-Stepparents/dp/0931948061", "type" => "[Book]"],
                    ["title" => "Surviving and Thriving in Stepfamily Relationships", "url" => "https://www.amazon.com/Surviving-Thriving-Stepfamily-Relationships-Doesnt/dp/0415894387", "type" => "[Book]"],
                    ["title" => "Divorce & New Beginnings", "url" => "https://www.amazon.com/Divorce-New-Beginnings-Co-Parenting-Stepfamilies/dp/0471326488", "type" => "[Book]"],
                    ["title" => "Caught in the Middle: Protecting the Children of High-Conflict Divorce", "url" => "https://www.amazon.com/Caught-Middle-Protecting-Children-High-Conflict-ebook/dp/B0028Y43V8", "type" => "[Book]"],
                    ["title" => "Divorce: The Art of Screwing Up Your Children", "url" => "https://www.amazon.com/Divorce-Art-Screwing-Your-Children/dp/1500243167", "type" => "[Book]"],
                    ["title" => "Mom’s House, Dad’s House", "url" => "https://www.amazon.com/Moms-House-Dads-Making-homes/dp/0684830787", "type" => "[Book]"]
                ],
                "Boundary and Goal Setting" => [
                    ["title" => "Boundaries: Where you End and I Begin", "url" => "https://www.amazon.com/Boundaries-Where-Begin-Recognize-Healthy/dp/1568380305", "type" => "[Book]"],
                    ["title" => "Boundaries: When to Say Yes, How to Say No", "url" => "http://www.boundariesbooks.com/", "type" => "[Book]"],
                    ["title" => "Goal Exploration", "url" => "https://globecoreinc.com/wp-content/uploads/2020/12/goal-exploration.pdf", "type" => "[Website]"],
                    ["title" => "Setting Boundaries", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/Setting-Boundaries.pdf", "type" => "[Activity]"],
                    ["title" => "Identifying Triggers", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/Triggers.pdf", "type" => "[Activity]"],
                    ["title" => "Interpersonal Effectiveness", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/dbt-interpersonal-effectiveness-grp-4-handouts.pdf", "type" => "[Activity]"],
                    ["title" => "Build Better Relationship Through Consent...", "url" => "https://www.amazon.com/dp/1621061760", "type" => "[Book]"],
                    ["title" => "Set Boundaries, Find Peace", "url" => "https://www.nedratawwab.com/my-book", "type" => "[Book]"],
                    ["title" => "Boundary Quiz from Set Boundaries, Find Peace", "url" => "https://www.nedratawwab.com/boundariesquiz", "type" => "[Activity]"],
                    ["title" => "Set Boundaries, Find Peace: A Guide to Reclaiming Yourself", "url" => "https://www.amazon.com/Set-Boundaries-Find-Peace-Reclaiming/dp/0593192095", "type" => "[Book]"]
                ],
                "Bullying" => [
                    ["title" => "stopbullying.gov", "url" => "https://www.stopbullying.gov/", "type" => "[Website]"],
                    ["title" => "Cyberbullying.org", "url" => "https://cyberbullying.org", "type" => "[Website]"],
                    ["title" => "American Psychological Association Children's Books about Bullying", "url" => "https://www.apa.org/pubs/magination/browse?query=subject:Bullying", "type" => "[Books]"]
                ],
                "Cancer" => [
                    ["title" => "Cancer Journey: A Caregiver’s View from the Passenger Seat", "url" => "https://www.amazon.com/Cancer-Journey-Caregivers-View-Passenger/dp/0615625835", "type" => "[Book]"],
                    ["title" => "The Emperor of All Maladies", "url" => "https://www.amazon.com/The-Emperor-of-All-Maladies-audiobook/dp/B017DQSQD6", "type" => "[Book]"]
                ],
                "Chronic Pain" => [
                    ["title" => "Panel cites need for individualized, patient-centered approach to treat and monitor chronic pain", "url" => "https://www.nih.gov/news-events/news-releases/panel-cites-need-individualized-patient-centered-approach-treat-monitor-chronic-pain", "type" => "[Article]"],
                    ["title" => "Mindfulness meditation alleviates fibromyalgia symptoms", "url" => "https://www.ncbi.nlm.nih.gov/pubmed/25425224", "type" => "[Article]"],
                    ["title" => "Risk factors of chronic daily headache or chronic migraine", "url" => "https://www.ncbi.nlm.nih.gov/pubmed/25416458", "type" => "[Article]"],
                    ["title" => "Reiki for the Management of Neuropathic Pain", "url" => "https://clinicaltrials.gov/ct2/show/NCT02328703", "type" => "[Article]"]
                ],
                "Co-Dependency" => [
                    ["title" => "Co-Dependency: The New Addiction", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/Final-Codependency-Info-Sheet-GlobeCoRe.pdf", "type" => "[Article]"],
                    ["title" => "Co-Dependent No More", "url" => "https://www.amazon.com/Codependent-No-More-Controlling-Yourself/dp/B0B622JFNN", "type" => "[Book]"],
                    ["title" => "The New Co-Dependency", "url" => "https://www.amazon.com/The-New-Codependency-Guidance-Generation-ebook/dp/B001NLL7SO", "type" => "[Book]"],
                    ["title" => "Women Who Love Too Much", "url" => "https://www.amazon.com/Women-Who-Love-Too-Much/dp/1416550216", "type" => "[Book]"],
                    ["title" => "Beyond Co-Dependency & Getting Better All The Time", "url" => "https://www.amazon.com/Beyond-Codependency-Getting-Better-Time-ebook/dp/B00BS03NB4", "type" => "[Book]"],
                    ["title" => "The Art of Letting Go", "url" => "https://www.amazon.com/Art-Letting-Go-Thought-Catalog-ebook/dp/B01CEMHIYC", "type" => "[Book]"],
                    ["title" => "One-Way Relationships Workbook", "url" => "https://www.amazon.com/One-Way-Relationships-Workbook-Step-Step/dp/0840734123", "type" => "[Workbook]"],
                    ["title" => "The Codependency Workbook", "url" => "https://www.amazon.com/Codependency-Workbook-Developing-Maintaining-Independence/dp/1646114310", "type" => "[Workbook]"],
                    ["title" => "Couple Therapy Workbook", "url" => "https://www.amazon.com/Couple-Therapy-Workbook-Step-step/dp/1774851229", "type" => "[Workbook]"],
                    ["title" => "Adult children of emotionally immature parents", "url" => "https://www.amazon.com/Adult-Children-Emotionally-Immature-Parents/dp/1626251703", "type" => "[Book]"]
                ],
                "COVID-19" => [
                    ["title" => "Government Resources", "url" => "https://www.coronavirus.gov/", "type" => "[Website]"],
                    ["title" => "Public Health Updates", "url" => "https://dph.georgia.gov/covid-19-daily-status-report", "type" => "[Website]"],
                    ["title" => "Stress and Coping Tips From CDC", "url" => "https://www.cdc.gov/coronavirus/2019-ncov/prepare/managing-stress-anxiety.html", "type" => "[Website]"],
                    ["title" => "Science-Based Coping Strategies", "url" => "https://theconversation.com/7-science-based-strategies-to-cope-with-coronavirus-anxiety-133207", "type" => "[Website]"],
                    ["title" => "How Teenagers Can Protect Their Mental Health", "url" => "https://www.unicef.org/coronavirus/how-teenagers-can-protect-their-mental-health-during-coronavirus-covid-19", "type" => "[Website]"],
                    ["title" => "Information and Resource Guide – NAMI", "url" => "https://globecoreinc.com/wp-content/uploads/2020/12/COVID-19-Updated-Guide-1.pdf", "type" => "[Guide]"],
                    ["title" => "Coping With Isolation", "url" => "https://news.northwestern.edu/stories/2020/03/coping-with-covid-19-social-isolation", "type" => "[Website]"]
                ],
                "Depression" => [
                    ["title" => "Feeling Good: The New Mood Therapy", "url" => "https://www.amazon.com/Feeling-Good-The-Mood-Therapy/dp/0380810336", "type" => "[Book]"],
                    ["title" => "I Don’t Want to Talk About It", "url" => "https://www.amazon.com/Terrence-Real-Overcoming-1997-01-31-Hardcover/dp/B001UG2U0Q", "type" => "[Book]"],
                    ["title" => "Depression Tracking Form", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/Depression-Tracking-Form.pdf", "type" => "[Assessment]"],
                    ["title" => "Why Some People Are More Prone to Depression", "url" => "https://www.verywellmind.com/why-are-some-people-more-prone-to-depression-1067622", "type" => "[Article]"],
                    ["title" => "The Chemistry of Depression", "url" => "https://www.verywellmind.com/the-chemistry-of-depression-1065137", "type" => "[Article]"],
                    ["title" => "Rhodiola Rosea for Depression", "url" => "https://www.verywellmind.com/how-is-rhodiola-rosea-used-to-treat-anxiety-3024972", "type" => "[Article]"]
                ],
                "Diversity, Equity & Inclusion" => [
                    ["title" => "Anti-Racism for Kids 101", "url" => "https://booksforlittles.com/racial-diversity/", "type" => "[Article]"],
                    ["title" => "White Fragility: Why It’s So Hard for White People to Talk About Racism", "url" => "https://www.amazon.com/White-Fragility-People-About-Racism/dp/0807047414", "type" => "[Book]"],
                    ["title" => "Blindspot: Hidden Biases of Good People", "url" => "https://a.co/d/97TxIuI", "type" => "[Book]"],
                    ["title" => "Implicit Bias: An Educator's Guide", "url" => "https://a.co/d/cgiAUjl", "type" => "[Book]"],
                    ["title" => "Biased: Uncovering the Hidden Prejudice", "url" => "https://a.co/d/6uXfeDY", "type" => "[Book]"],
                    ["title" => "The Leader's Guide to Unconscious Bias", "url" => "https://a.co/d/bjTbO86", "type" => "[Book]"],
                    ["title" => "Microaggressions in Everyday Life", "url" => "https://a.co/d/adaT0Ze", "type" => "[Book]"]
                ],
                "Eating Disorders" => [
                    ["title" => "Weight Science: Evaluating the Evidence", "url" => "https://nutritionj.biomedcentral.com/articles/10.1186/1475-2891-10-9", "type" => "[Article]"],
                    ["title" => "Overcoming Disordered Eating", "url" => "https://www.cci.health.wa.gov.au/Resources/Looking-After-Yourself/Disordered-Eating", "type" => "[Activity]"],
                    ["title" => "Eating Disorders- A Guide to Medical Care", "url" => "https://globecoreinc.com/wp-content/uploads/2021/04/AED_Medical_Care_Guidelines_English_04_03_18_a.pdf", "type" => "[Guide]"],
                    ["title" => "8 Keys to Recovery from an Eating Disorder", "url" => "https://www.amazon.com/Keys-Recovery-Eating-Disorder-Therapeutic/dp/0393706958", "type" => "[Book]"],
                    ["title" => "Health at Every Size", "url" => "https://www.amazon.com/Health-At-Every-Size-Surprising/dp/1935618253", "type" => "[Book]"],
                    ["title" => "Recovery Warriors", "url" => "https://www.recoverywarriors.com/app/", "type" => "[App]"],
                    ["title" => "National Eating Disorder Helpline", "url" => "tel:1-800-931-2237", "type" => "[Hotline]"],
                    ["title" => "Overcoming Binge Eating", "url" => "https://www.amazon.com/Overcoming-Binge-Eating-Second-Edition/dp/1572305614", "type" => "[Book]"]
                ],
                "Empowerment" => [
                    ["title" => "70 Affirmations to Help You Stay Positive", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/70-Affirmations.pdf", "type" => "[Article]"],
                    ["title" => "Authentic Happiness", "url" => "https://www.amazon.com/Authentic-Happiness-Psychology-Potential-Fulfillment/dp/0743222989", "type" => "[Book]"],
                    ["title" => "The Power of NOW", "url" => "https://www.amazon.com/Power-Now-Guide-Spiritual-Enlightenment/dp/1577314808", "type" => "[Book]"],
                    ["title" => "Personal Values Card Sort", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/valuescardsort_0.pdf", "type" => "[Activity]"],
                    ["title" => "Atomic Habits", "url" => "https://www.amazon.com/Atomic-Habits-Proven-Build-Break/dp/1847941842", "type" => "[Book]"],
                    ["title" => "The 7 Habits of Highly Effective People", "url" => "https://www.amazon.com/Habits-Highly-Effective-People-Powerful/dp/1982137274", "type" => "[Book]"]
                ],
                "Feelings" => [
                    ["title" => "How Do You Feel Today", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/How-Do-you-feel-today.pdf", "type" => "[Exercise]"],
                    ["title" => "Gratitude Exercises", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/Gratitude-Exercises.pdf", "type" => "[Exercise]"],
                    ["title" => "Feeling Wheel", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/Feeling-Wheel.pdf", "type" => "[Exercise]"]
                ],
                "Friendships" => [
                    ["title" => "The Lost Art of Listening", "url" => "https://a.co/d/0eewC3S3", "type" => "[Book]"],
                    ["title" => "Platonic: How the Science of Attachment Can Help You Make Friends", "url" => "https://a.co/d/0gdr04RE", "type" => "[Book]"],
                    ["title" => "Big Friendship: How We Keep Each Other Close", "url" => "https://a.co/d/04U8dV0g", "type" => "[Book]"]
                ],
                "Forgiveness" => [
                    ["title" => "The Book of Forgiving", "url" => "https://www.amazon.com/Book-Forgiving-Fourfold-Healing-Ourselves/dp/0062203568", "type" => "[Book]"],
                    ["title" => "How Can I Forgive You?", "url" => "https://www.amazon.com/How-Can-Forgive-You-Courage/dp/0060009314", "type" => "[Book]"]
                ],
                "Grief & Loss" => [
                    ["title" => "The Art of Listening in a Healing Way", "url" => "https://www.amazon.com/Art-Listening-Healing-Way/dp/1885933355", "type" => "[Book]"],
                    ["title" => "Companioning You!", "url" => "https://www.amazon.com/Companioning-You-Soulful-Yourself-Bereaved/dp/161722166X", "type" => "[Book]"],
                    ["title" => "Griefnet.org", "url" => "https://www.rivendell.org/", "type" => "[Website]"],
                    ["title" => "Symptoms of Grief", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/Symptoms-of-Grief.pdf", "type" => "[Article]"],
                    ["title" => "On Grief and Grieving", "url" => "https://www.amazon.com/Grief-Grieving-Finding-Meaning-Through-dp-1476775559/dp/1476775559", "type" => "[Book]"],
                    ["title" => "Finding Meaning: The Sixth Stage of Grief", "url" => "https://www.amazon.com/Finding-Meaning-Sixth-Stage-Grief/dp/1501192736", "type" => "[Book]"]
                ],
                "Identity" => [
                    ["title" => "My Mother/Myself: The Daughters Search for Identity", "url" => "https://www.amazon.com/My-Mother-Self-Daughters-Identity/dp/0385320159", "type" => "[Book]"],
                    ["title" => "Wheel of Life", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/Wheel-of-Life.pdf", "type" => "[Activity]"],
                    ["title" => "Identity Mind Map", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/Identity-Mind-Map.pdf", "type" => "[Activity]"]
                ],
                "Illness" => [
                    ["title" => "The Alchemy of Illness", "url" => "https://www.amazon.com/Alchemy-Illness-Kat-Duff/dp/0609899430", "type" => "[Book]"],
                    ["title" => "Love, Medicine, and Miracles", "url" => "https://www.amazon.com/Love-Medicine-Miracles-Self-Healing-Exceptional/dp/0060919833", "type" => "[Book]"],
                    ["title" => "Peace, Love, & Healing", "url" => "https://www.amazon.com/Peace-Love-Healing-Communication-Self-Healing/dp/B007WZTPTS", "type" => "[Book]"]
                ]
            ];
            ?>

            <div class="columns-1 md:columns-2 lg:columns-3 gap-8 space-y-8">
                <?php foreach($resourceCategories as $category => $items): ?>
                <div class="break-inside-avoid bg-white rounded-3xl p-8 shadow-lg border border-gray-100 relative overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-primary/5 rounded-bl-full"></div>
                    <h3 class="text-2xl font-bold text-[#071e26] mb-6 border-b border-gray-100 pb-4"><?php echo $category; ?></h3>
                    <ul class="space-y-4 relative z-10">
                        <?php foreach($items as $item): ?>
                        <li class="flex items-start gap-3">
                            <?php if(strpos(strtolower($item['type']), 'book') !== false): ?>
                                <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            <?php elseif(strpos(strtolower($item['type']), 'video') !== false): ?>
                                <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <?php else: ?>
                                <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                            <?php endif; ?>
                            <a href="<?php echo $item['url']; ?>" target="_blank" rel="noopener noreferrer" class="text-gray-700 hover:text-primary transition-colors font-medium text-sm leading-tight inline-block">
                                <?php echo $item['title']; ?>
                                <span class="inline-block text-[10px] text-gray-400 font-normal ml-1 whitespace-nowrap bg-gray-50 px-1.5 py-0.5 rounded-md border border-gray-100"><?php echo trim($item['type'], "[]"); ?></span>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
            
        </div>
    </main>

    <!-- Support CTA -->
    <section class="py-20 bg-primary relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[url('/assets/wp-content/uploads/2023/10/brick-background-59-819x1024.png')] bg-cover bg-center"></div>
        <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
            <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6">Need Personalized Support?</h2>
            <p class="text-white/90 text-lg mb-10">Our resources are great, but sometimes you need a professional to talk to. GlobeCoRe is here for you.</p>
            <a href="/contact.php" class="inline-block bg-white text-[#071e26] font-bold py-4 px-10 rounded-full hover:shadow-lg hover:bg-gray-50 transition-all duration-300 text-lg">Contact Us Today</a>
        </div>
    </section>

    <?php include "partials/footer.php"; ?>
</body>
</html>
