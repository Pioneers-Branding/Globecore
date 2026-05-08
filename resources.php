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
            <div
                class="inline-flex items-center gap-2 bg-secondary/20 border border-secondary/30 rounded-full px-5 py-2 mb-8 backdrop-blur-md">
                <span class="w-2 h-2 bg-secondary rounded-full animate-pulse"></span>
                <span class="text-white text-xs font-bold tracking-[0.2em] uppercase">Knowledge Base</span>
            </div>
            <h1
                class="text-4xl md:text-5xl lg:text-7xl font-extrabold text-white leading-tight mb-8 tracking-tight drop-shadow-2xl">
                Curated Resources
            </h1>
            <p class="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto font-medium leading-relaxed drop-shadow-md">
                The following article links, books, and exercises are recommended to provide you with additional
                insights, education, and online mental health care support.
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
                ],
                "LGBTQ+" => [
                    ["title" => "Guides for Sex and Relationships", "url" => "https://web.archive.org/web/20250130133211/http://www.joekort.com/", "type" => "[Website]"],
                    ["title" => "Coming Out Stories: Personal Experiences of Coming Out from Across the LGBTQ+ Spectrum", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Coming-Out-Stories-Personal-Experiences/dp/1787754952", "type" => "[Book]"]
                ],
                "Meditation" => [
                    ["title" => "Guided Meditation on Difficult Emotions", "url" => "https://web.archive.org/web/20250130133211/http://www.joekort.com/", "type" => "[Article]"]
                ],
                "Mindfulness" => [
                    ["title" => "Mindfulness for Beginners: Reclaiming the Present Moment and Your Life", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Mindfulness-Beginners-Reclaiming-Present-Moment/dp/1622036670", "type" => "[Book]"],
                    ["title" => "Wherever You Go, There You Are", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Wherever-You-There-Are-Mindfulness/dp/1401307787", "type" => "[Book]"],
                    ["title" => "Mindfulness for Dummies", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Mindfulness-Dummies-Shamash-Alidina/dp/1118868188", "type" => "[Book]"],
                    ["title" => "The Mindful Way Through Stress: The Proven 8-Week Path to Health, Happiness, and Well-Being", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Mindful-Way-through-Stress-Well-Being/dp/1462509401", "type" => "[Book]"],
                    ["title" => "The Mindful Way Through Anxiety: Break Free from Chronic Worry and Reclaim Your Life", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Mindful-Way-through-Anxiety-Chronic/dp/1606239821", "type" => "[Book]"],
                    ["title" => "The Power of Now: A Guide to Spiritual Enlightenment", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Power-Now-Guide-Spiritual-Enlightenment/dp/1577314808", "type" => "[Book]"],
                    ["title" => "Relaxation Techniques", "url" => "https://globecoreinc.com/wp-content/uploads/2020/12/relaxation-techniques.pdf", "type" => "[Website]"],
                    ["title" => "Mindfulness Exercise", "url" => "https://globecoreinc.com/wp-content/uploads/2020/12/mindfulness-exercises.pdf", "type" => "[Website]"]
                ],
                "Narcissism" => [
                    ["title" => "Web of Lies – My Life with a Narcissist", "url" => "https://web.archive.org/web/20250130133211/https://www.faim.org/heal-yourself-with-food", "type" => "[Book]"],
                    ["title" => "NARCISSISTIC ABUSE RECOVERY: How to heal from emotional abuse and survive abusive relationships", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/NARCISSISTIC-ABUSE-RECOVERY-emotional-relationships-ebook/dp/B07QZSX9Z2", "type" => "[Book]"],
                    ["title" => "Counseling Victims of Violence: A Handbook for Helping Professionals", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Counseling-Victims-Violence-Handbook-Professionals/dp/0897934636", "type" => "[Book]"],
                    ["title" => "Cutting Loose: An Adult's Guide to Coming to Terms with Your Parents", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Cutting-Loose-Adults-Coming-Parents/dp/0671696041", "type" => "[Book]"],
                    ["title" => "Why Is It Always About You?: The Seven Deadly Sins of Narcissism", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Why-Always-About-You-Narcissism/dp/0743214285", "type" => "[Book]"],
                    ["title" => "The Narcissist in Your Life: Recognizing the Patterns and Learning to Break Free", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Narcissist-Your-Life-Recognizing-Patterns/dp/0738285773", "type" => "[Book]"],
                    ["title" => "The Verbally Abusive Relationship, Expanded Third Edition", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Verbally-Abusive-Relationship-Expanded-Third/dp/1440504636", "type" => "[Book]"],
                    ["title" => "Coping with BPD: DBT and CBT Skills to Soothe the Symptoms of Borderline Personality Disorder", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Coping-BPD-Symptoms-Borderline-Personality/dp/1626252181", "type" => "[Book]"],
                    ["title" => "Narcissistic Mothers: Deal with Toxic Parents' Abuse & Borderline Personality Disorder", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Narcissistic-Mothers-Personality-Intelligence-Relationship-ebook/dp/B07Z5LGQ43", "type" => "[Book]"],
                    ["title" => "Complex Borderline Personality Disorder: How Coexisting Conditions Affect Your BPD", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Complex-Borderline-Personality-Disorder-Coexisting/dp/1684038553", "type" => "[Book]"],
                    ["title" => "Personality Disorders: A Short History of Narcissistic, Borderline, Antisocial, and Other Types", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Personality-Disorders-Narcissistic-Borderline-Antisocial-ebook/dp/B0BKLSX33F", "type" => "[Book]"],
                    ["title" => "Antisocial, Borderline, Narcissistic and Histrionic Workbook: Treatment Strategies for Cluster B Personality Disorders", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Antisocial-Borderline-Narcissistic-Histrionic-Workbook/dp/1559570180", "type" => "[Book]"]
                ],
                "Naturopathic Care" => [
                    ["title" => "Ulta Lab Tests", "url" => "https://web.archive.org/web/20250130133211/https://www.ultalabtests.com/sharonbelhamel", "type" => "[Assessment]"],
                    ["title" => "Pure Caps Pro: Vitamins, Dietary & Health Supplements", "url" => "https://web.archive.org/web/20250130133211/https://www.purecapspro.com/DrSharonBelhamel/pe/home.asp", "type" => "[Products]"],
                    ["title" => "Blood Work – Definition of Terms", "url" => "https://web.archive.org/web/20250130133211/https://globecoreinc.com/wp-content/uploads/2021/03/BloodWork.pdf", "type" => "[Article]"],
                    ["title" => "Heal Yourself With Food", "url" => "https://web.archive.org/web/20250130133211/https://www.faim.org/heal-yourself-with-food", "type" => "[Article]"],
                    ["title" => "Essential Oils to Help Ease Stress", "url" => "https://web.archive.org/web/20250130133211/https://www.verywellmind.com/essential-oils-to-help-ease-stress-89636", "type" => "[Article]"],
                    ["title" => "10 Ways to Neutralize Body Acids", "url" => "https://web.archive.org/web/20250130133211/https://www.tyentusa.com/blog/ph-balance-maintain-tips/", "type" => "[Article]"],
                    ["title" => "How to Reduce Tension with Progressive Muscle Relaxation", "url" => "https://web.archive.org/web/20250130133211/https://www.verywellmind.com/reduce-tension-with-progressive-muscle-relaxation-3144608", "type" => "[Article]"],
                    ["title" => "Nutritional Resources: Flower Remedies", "url" => "https://web.archive.org/web/20250130133211/https://store.nutritionalresources.com/collections/flower-remedies", "type" => "[Products]"],
                    ["title" => "6 Foods That Reduce Anxiety", "url" => "https://web.archive.org/web/20250130133211/https://www.healthline.com/nutrition/6-foods-that-reduce-anxiety", "type" => "[Article]"],
                    ["title" => "10 Evidence Based Health Benefits of Tumeric", "url" => "https://web.archive.org/web/20250130133211/https://www.healthline.com/nutrition/top-10-evidence-based-health-benefits-of-turmeric", "type" => "[Article]"]
                ],
                "Pain" => [
                    ["title" => "Pain-Tracking-Form", "url" => "https://web.archive.org/web/20250130133211/https://globecoreinc.com/wp-content/uploads/2021/03/Pain-Tracking-Form.pdf", "type" => "[Assessment]"]
                ],
                "Parenting" => [
                    ["title" => "Toxic Parents: Overcoming Their Hurtful Legacy and Reclaiming Your Life", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Toxic-Parents-Overcoming-Hurtful-Reclaiming/dp/0553381407", "type" => "[Book]"],
                    ["title" => "The Best Parental Control Apps for Your Phone", "url" => "https://web.archive.org/web/20250130133211/https://www.pcmag.com/picks/the-best-parental-control-apps-for-your-phone", "type" => "[Article]"],
                    ["title" => "Don't Alienate the Kids!: Raising Resilient Children While Avoiding High-Conflict Divorce", "url" => "https://web.archive.org/web/20250130133211/https://www.familyaccessfightingforchildrensrights.com/book-referrals-for-alienated-family-members-and-professionals.html", "type" => "[Book]"],
                    ["title" => "CBT Toolbox for Depressed, Anxious & Suicidal Children and Adolescents", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Toolbox-Depressed-Suicidal-Children-Adolescents/dp/1683732537", "type" => "[Book]"],
                    ["title" => "DBT for Kids: Effective Dialectical Behavior Therapy Tips and Strategy", "url" => "https://web.archive.org/web/20250130133211/https://www.walmart.com/ip/DBT-Kids-Effective-Dialectical-Behavior-therapy-Tips-Strategy-parenting-child-emotional-distress-aggressive-behavior-build-better-relationships-Paper-9798506985433/627857905", "type" => "[Book]"],
                    ["title" => "Anxiety, Depression & Anger Toolbox for Teens", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Anxiety-Depression-Anger-Toolbox-Teens/dp/1683732715", "type" => "[Book]"],
                    ["title" => "Breaking Free of Child Anxiety and OCD: A Scientifically Proven Program for Parents", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/dp/0190883529", "type" => "[Book]"],
                    ["title" => "Raising Resilience: 25 Tips for Parenting your Child with Anxiety and OCD", "url" => "https://web.archive.org/web/20250130133211/https://www.youtube.com/@AnxietyATL", "type" => "[Video]"],
                    ["title" => "Young Caregivers", "url" => "https://web.archive.org/web/20250130133211/https://www.apa.org/pi/about/publications/caregivers/practice-settings/intervention/young-caregivers", "type" => "[Article]"],
                    ["title" => "Self-Centered Parents and Their Role-Reversed Children", "url" => "https://web.archive.org/web/20250130133211/https://www.psychologytoday.com/us/blog/living-on-automatic/202303/self-centered-parents-and-role-reversed-children-0", "type" => "[Article]"],
                    ["title" => "Gregory J. Jurkovic's Filial Responsibility Research", "url" => "https://web.archive.org/web/20250130133211/https://www.researchgate.net/scientific-contributions/Gregory-J-Jurkovic-11276965", "type" => "[Articles]"],
                    ["title" => "Great Ways to Sabotage a Good Conversation", "url" => "https://web.archive.org/web/20250130133211/https://a.co/d/0ii1wdmB", "type" => "[Book]"]
                ],
                "Pregnancy, Fertility & Postpartum Depression" => [
                    ["title" => "This Isn't What I Expected [2nd Edition]: Overcoming Postpartum Depression", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/This-Isnt-What-Expected-2nd-ebook/dp/B00E257TWQ", "type" => "[Book]"],
                    ["title" => "Postpartum Depression: How to Overcome Postpartum Depression and Be a Happy Mom", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Postpartum-Depression-Overcome-Happy-Postnatal-ebook/dp/B00NQN64YE", "type" => "[Book]"],
                    ["title" => "Postpartum Depression Demystified: An Essential Guide for Understanding and Overcoming the Most Common Complication after Childbirth", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Postpartum-Depression-Demystified-Understanding-Complication/dp/1569242666", "type" => "[Book]"],
                    ["title" => "Women's Moods: What Every Woman Must Know About Hormones, the Brain, and Emotional Health", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Womens-Moods-Hormones-Emotional-Health/dp/0380728524", "type" => "[Book]"],
                    ["title" => "When Bad Things Happen to Good People", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/When-Things-Happen-Good-People/dp/1400034728", "type" => "[Book]"]
                ],
                "Post Traumatic Stress Disorder (PTSD)" => [
                    ["title" => "Brain, Mind, and Body in the Healing of Trauma", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/The-Body-Keeps-Score-Healing/dp/0143127748", "type" => "[Book]"],
                    ["title" => "DBT Workbook for PTSD: Strategies to Reduce Intrusive Thoughts, Manage Emotions, and Find Calm", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/DBT-Workbook-PTSD-Strategies-Intrusive/dp/1638784930", "type" => "[Workbook]"],
                    ["title" => "The PTSD Workbook: Simple, Effective Techniques for Overcoming Traumatic Stress Symptoms", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/PTSD-Workbook-Effective-Techniques-Overcoming/dp/1626253706", "type" => "[Workbook]"]
                ],
                "Racial Stressors" => [
                    ["title" => "Anti-Racism for Kids 101", "url" => "https://web.archive.org/web/20250130133211/https://booksforlittles.com/racial-diversity/", "type" => "[Article]"],
                    ["title" => "White Fragility: Why It's So Hard for White People to Talk About Racism", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/White-Fragility-People-About-Racism/dp/0807047414", "type" => "[Book]"],
                    ["title" => "Asian American Support", "url" => "#", "type" => "[Hotline]"]
                ],
                "Relationship Change in Love" => [
                    ["title" => "Communication that Makes a Difference", "url" => "https://web.archive.org/web/20250130133211/https://www.nytimes.com/roomfordebate/2011/02/02/where-are-the-women-in-wikipedia/communication-styles-make-a-difference", "type" => "[Article]"],
                    ["title" => "The Five Love Languages: The Secret to Love that Lasts", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Love-Languages-Secret-that-Lasts/dp/080241270X", "type" => "[Book]"],
                    ["title" => "The Five Love Languages: How to Express Heartfelt Commitment to Your Mate", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Five-Love-Languages-Heartfelt-Commitment/dp/B006Q2LTRO", "type" => "[Book]"],
                    ["title" => "Calling in 'The One': 7 Weeks to Attract the Love of Your Life", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Calling-One-Weeks-Attract-Love/dp/1400049296", "type" => "[Book]"],
                    ["title" => "The Seven Principles for Making Marriage Work", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Seven-Principles-Making-Marriage-Work-ebook/dp/B00N6PEQV0", "type" => "[Book]"],
                    ["title" => "Getting the Love You Want, 20th Anniversary Edition: A Guide for Couples", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Getting-Love-Want-20th-Anniversary-ebook/dp/B000V770GY", "type" => "[Book]"],
                    ["title" => "Keeping the Love You Find: A Personal Guide", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Keeping-Love-You-Find-Personal/dp/0671734202", "type" => "[Book]"],
                    ["title" => "Making Marriage Simple: Ten Relationship-Saving Truths", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Making-Marriage-Simple-Relationship-Saving-Truths-ebook/dp/B009C5XLUU", "type" => "[Book]"],
                    ["title" => "Making Marriage Simple: Ten Truths for Changing the Relationship You Have into the One You Want", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Making-Marriage-Simple-Changing-Relationship/dp/B00D822GR2", "type" => "[Book]"],
                    ["title" => "Giving The Love That Heals", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Giving-Love-Heals-Harville-Hendrix/dp/0671793993", "type" => "[Book]"],
                    ["title" => "Receiving Love: Transform Your Relationship by Letting Yourself Be Loved", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Receiving-Love-Transform-Relationship-Yourself-ebook/dp/B000FC2L50", "type" => "[Book]"],
                    ["title" => "Relationship Map", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/Relationship-Map.pdf", "type" => "[Activity]"],
                    ["title" => "Conversation Starters for Couples", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/6063674ed14487003e93cdf8.pdf", "type" => "[Activity]"],
                    ["title" => "Speaker Listener Activity", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/Speaker_Listener_with_Example.pdf", "type" => "[Activity]"],
                    ["title" => "Couples Strengths Exploration", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/couples-strengths-exploration.pdf", "type" => "[Activity]"],
                    ["title" => "Couples Gratitude Journal", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/couples-gratitude-journal.pdf", "type" => "[Activity]"],
                    ["title" => "Relationship Growth Activity", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/relationship-growth-activity.pdf", "type" => "[Activity]"],
                    ["title" => "Conversation Transformation: Recognize and Overcome the 6 Most Destructive Communication Patterns", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Conversation-Transformation-Recognize-Destructive-Communication/dp/007176996X", "type" => "[Book]"],
                    ["title" => "Difficult Conversation: How to Discuss What Matters Most", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Difficult-Conversations-Discuss-What-Matters/dp/0143118447", "type" => "[Book]"],
                    ["title" => "Grown-Up Marriage: What We Know, Wish We Had Known, and Still Need to Know About Being Married", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Grown-Up-Marriage-Known-Still-Married/dp/0743210816", "type" => "[Book]"],
                    ["title" => "Why Marriages Succeed or Fail", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Why-Marriages-Succeed-Fail-Yours/dp/0684802414", "type" => "[Book]"],
                    ["title" => "The Relationship Cure", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Relationship-Cure-Strengthening-Marriage-Friendships/dp/0609809539", "type" => "[Book]"],
                    ["title" => "I Love You, Don't Leave Me", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Hate-You-Dont-Leave-Me/dp/0380713055", "type" => "[Book]"],
                    ["title" => "Stop Walking on Eggshells", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Stop-Walking-Eggshells-Borderline-Personality/dp/1684036895", "type" => "[Book]"],
                    ["title" => "The Emotionally Unavailable Man", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Emotionally-Unavailable-Man-Patti-Henry-ebook/dp/B009R9ICVO", "type" => "[Book]"],
                    ["title" => "The Verbally Abusive Relationship", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Verbally-Abusive-Relationship-Expanded-Third/dp/1440504636", "type" => "[Book]"],
                    ["title" => "Love Me, Don't Leave Me: Overcoming Fear of Abandonment and Building Lasting, Loving Relationships", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Love-Dont-Leave-Abandonment-Relationships/dp/1608829529", "type" => "[Book]"],
                    ["title" => "DBT for Couples: Effective ways to manage distress, regulate emotional outbursts and improve your marriage with Dialectical Behavior Therapy", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/DBT-Couples-Effective-emotional-Dialectical-ebook/dp/B095SVQNJY", "type" => "[Book]"],
                    ["title" => "Couples Therapy Workbook: 30 Guided Conversations to Re-Connect Relationships", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Couples-Therapy-Workbook-Kathleen-Mates-Youngman/dp/1937661466", "type" => "[Workbook]"],
                    ["title" => "Couples Therapy Workbook for Healing: Emotionally Focused Therapy Techniques to Restore Your Relationship", "url" => "https://web.archive.org/web/20250130133211/http://Couples%20Therapy%20Workbook%20for%20Healing:%20Emotionally%20Focused%20Therapy%20Techniques%20to%20Restore%20Your%20Relationship", "type" => "[Workbook]"],
                    ["title" => "Hold Me Tight", "url" => "https://web.archive.org/web/20250130133211/https://a.co/d/jaGbtak", "type" => "[Book]"],
                    ["title" => "The Lost Art of Listening", "url" => "https://web.archive.org/web/20250130133211/https://a.co/d/hsR9To8", "type" => "[Book]"]
                ],
                "Self-Esteem" => [
                    ["title" => "Personal Inventory (Negative)", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/Personal-Inventory-Negative.pdf", "type" => "[Assessment]"],
                    ["title" => "Personal Inventory (Positive)", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/Personal-Inventory-Positive-.pdf", "type" => "[Assessment]"],
                    ["title" => "Homecoming: Reclaiming and Championing Your Inner Child", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Homecoming-Reclaiming-Championing-Inner-Child/dp/0553353896", "type" => "[Book]"],
                    ["title" => "Positive Traits", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/positive-traits-2.pdf", "type" => "[Activity]"],
                    ["title" => "My Strengths and Qualities", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/my-strengths-and-qualities-1.pdf", "type" => "[Activity]"],
                    ["title" => "Challenging Negative Thoughts", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/challenging-negative-thoughts.pdf", "type" => "[Activity]"]
                ],
                "Sexual Addiction" => [
                    ["title" => "Facing the Shadow: Starting Sexual and Relationship Recovery", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Facing-Shadow-3rd-Starting-Relationship/dp/0985063378", "type" => "[Book]"]
                ],
                "Sexual Development & Behavior in Children" => [
                    ["title" => "Sexual Development & Behavior in Children: Information for Parents & Caregivers", "url" => "https://web.archive.org/web/20250130133211/https://www.nctsn.org/resources/sexual-development-and-behavior-children-information-parents-and-caregivers", "type" => "[Article]"]
                ],
                "Stalking Challenges" => [
                    ["title" => "I Know You Really Love Me: A Psychiatrist's Journal of Erotomania, Stalking and Obsessive Love", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Know-You-Really-Love-Psychiatrists/dp/0028616650", "type" => "[Book]"],
                    ["title" => "Stop the Stalker: A Guide for Targets", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Stop-Stalker-Targets-BETSY-RAMSEY-ebook/dp/B00V9128EK", "type" => "[Book]"]
                ],
                "Stress" => [
                    ["title" => "Symptoms of Stress", "url" => "https://web.archive.org/web/20250130133211/https://www.therapistaid.com/worksheets/symptoms-of-stress.pdf", "type" => "[Website]"]
                ],
                "Suicide Prevention" => [
                    ["title" => "LifeLine: A Special Confidential Service: 24 Hour Suicide Prevention Hotline", "url" => "https://globecoreinc.com/wp-content/uploads/2021/03/LifeLine_Service.pdf", "type" => "[Hotline]"],
                    ["title" => "My Son…My Son…: A Guide to Healing After Death, Loss, or Suicide", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/My-Son-Guide-Healing-Suicide/dp/0961632607", "type" => "[Book]"]
                ],
                "Teen Issues" => [
                    ["title" => "The Teenage Brain: A Neuroscientist's Survival Guide to Raising Adolescents & Young Adults", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Teenage-Brain-Neuroscientists-Survival-Adolescents/dp/0062067842", "type" => "[Book]"],
                    ["title" => "Parenting Teenagers: A Guide to Solving Problems, Building Relationship, and Creating Harmony in the Family", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Parenting-Teenagers-Problems-Building-Relationship-ebook/dp/B00DWCH5BU", "type" => "[Book]"],
                    ["title" => "Stuff That Sucks: A Teen's Guide to Accepting What You Can't Change and Committing to What You Can", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Stuff-That-Sucks-Accepting-Committing-ebook/dp/B01LVYLWU3", "type" => "[Book]"],
                    ["title" => "Talking Back to OCD: The Program that Helps Kids and Teens Say 'No Way' — and Parents Say 'Way to Go'", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Talking-Back-OCD-Program-Parents-ebook/dp/B005D5ASJU", "type" => "[Book]"],
                    ["title" => "Stuff That's Loud: A Teen's Guide to Unspiraling When OCD Gets Noisy", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Stuff-Thats-Loud-Unspiraling-Solutions-ebook/dp/B07YWFTFHW", "type" => "[Book]"]
                ],
                "Therapy Basics" => [
                    ["title" => "Why Your Therapist Isn't Giving You Direct Advice", "url" => "https://web.archive.org/web/20250130133211/https://www.psychologytoday.com/intl/blog/relationship-and-trauma-insights/202212/why-your-therapist-isnt-giving-you-direct-advice", "type" => "[Article]"]
                ],
                "Trauma, Violence & Abuse" => [
                    ["title" => "Trauma & Recovery: The Aftermath of Violence–From Domestic Abuse to Political Terror", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Trauma-Recovery-Aftermath-Violence---Political/dp/0465061710", "type" => "[Book]"],
                    ["title" => "Homecoming: Reclaiming and Championing Your Inner Child", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Homecoming-Reclaiming-Championing-Inner-Child/dp/0553353896", "type" => "[Book]"],
                    ["title" => "Waking the Tiger: Healing Trauma", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Waking-Tiger-Healing-Peter-Levine/dp/155643233X", "type" => "[Book]"],
                    ["title" => "The Body Keeps the Score: Brain, Mind, and Body in the Healing of Trauma", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Body-Keeps-Score-Healing-Trauma/dp/0143127748", "type" => "[Book]"],
                    ["title" => "Getting Past Your Past: Take Control of Your Life with Self-Help Techniques from EMDR Therapy", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Getting-Past-Your-Self-Help-Techniques-ebook/dp/B00758AT24", "type" => "[Book]"],
                    ["title" => "The Verbally Abusive Relationship", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Verbally-Abusive-Relationship-Expanded-Third/dp/1440504636", "type" => "[Book]"],
                    ["title" => "Complex PTSD: From Surviving to Thriving: A guide to recovering from childhood trauma", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Complex-PTSD-Surviving-RECOVERING-CHILDHOOD-ebook/dp/B00HJBMDXK", "type" => "[Book]"],
                    ["title" => "13 Steps for Managing Flashbacks", "url" => "http://www.pete-walker.com/13StepsManageFlashbacks.htm", "type" => "[Article/PDF]"]
                ],
                "Women's Issues" => [
                    ["title" => "Women's Who Love Too Much: When you Keep Wishing and Hoping He'll Change", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Women-Who-Love-Too-Much/dp/1416550216", "type" => "[Book]"],
                    ["title" => "Lioness Arising: Wake Up and Change Your World", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Lioness-Arising-Wake-Change-World/dp/0307457796", "type" => "[Book]"],
                    ["title" => "Successful Women Think Differently: 9 Habits To Make You Happier, Healthier & More Resilient", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Successful-Women-Differently-Valorie-Burton-ebook/dp/B006UAAVF8", "type" => "[Book]"],
                    ["title" => "Happy Women Live Better", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Happy-Women-Better-Valorie-Burton-ebook/dp/B00ET7Q4KU", "type" => "[Book]"],
                    ["title" => "What's Really Holding You Back?: Closing the Gap Between Where You Are and Where You Want To Be", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Whats-Really-Holding-You-Back-ebook/dp/B001RLTFL6", "type" => "[Book]"],
                    ["title" => "Where Will You Go From Here? Moving Forward When Life Doesn't Go as Planned", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Where-Will-You-Go-Here/dp/0307729761", "type" => "[Book]"]
                ],
                "Workplace Change" => [
                    ["title" => "Who Moved My Cheese: An Amazing Way to Deal with Change in Your Work & in Your Life", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Who-Moved-My-Cheese-Amazing/dp/0399144463", "type" => "[Book]"],
                    ["title" => "The Purpose Driven Life: What on Earth am I Here For?", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Purpose-Driven-Life-Earth-Campaign/dp/B00CMUCXWE", "type" => "[Book]"],
                    ["title" => "7 Habits of Highly Effective People", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Habits-Highly-Effective-People-Miniature/dp/0762408332", "type" => "[Book]"],
                    ["title" => "Get Unstuck: Be Unstoppable", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Get-Unstuck-Be-Unstoppable-Imagined/dp/0736956786", "type" => "[Book]"],
                    ["title" => "What Are the Different Types of Resume Formats?", "url" => "https://web.archive.org/web/20250130133211/https://www.americasjobexchange.com/career-advice/types-of-resume-formats", "type" => "[Article]"],
                    ["title" => "Smarter Faster Better: Work Smarter, Not Harder and Be Productive in Life and Business", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Smarter-Faster-Better-Productive-Productivity-ebook/dp/B06W54J36Q", "type" => "[Book]"],
                    ["title" => "Smarter Faster Better: The Transformative Power of Real Productivity", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Smarter-Faster-Better-Transformative-Productivity-ebook/dp/B00Z3FRYB0", "type" => "[Book]"],
                    ["title" => "Grit: The Power of Passion and Perseverance", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/Grit-Passion-Perseverance-Angela-Duckworth/dp/1501111108", "type" => "[Book]"],
                    ["title" => "What Color is Your Parachute", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/s?k=what+color+is+your+parachute+2022", "type" => "[Book]"]
                ],
                "Young Adult Issues" => [
                    ["title" => "What Color is Your Parachute", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/s?k=what+color+is+your+parachute+2022", "type" => "[Book]"],
                    ["title" => "How parents and their adult children can build strong relationships", "url" => "https://web.archive.org/web/20250130133211/https://www.listennotes.com/podcasts/speaking-of/how-parents-and-their-adult-TQYx19B_OZy/", "type" => "[Podcast]"],
                    ["title" => "You and Your Adult Child", "url" => "https://web.archive.org/web/20250130133211/https://www.amazon.com/You-Your-Adult-Child-Challenging/dp/166800948X", "type" => "[Book]"]
                ]
            ];
            ?>

            <div class="columns-1 md:columns-2 lg:columns-3 gap-8 space-y-8">
                <?php foreach ($resourceCategories as $category => $items): ?>
                    <div
                        class="break-inside-avoid bg-white rounded-3xl p-8 shadow-lg border border-gray-100 relative overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <div class="absolute top-0 right-0 w-24 h-24 bg-primary/5 rounded-bl-full"></div>
                        <h3 class="text-2xl font-bold text-[#071e26] mb-6 border-b border-gray-100 pb-4">
                            <?php echo $category; ?>
                        </h3>
                        <ul class="space-y-4 relative z-10">
                            <?php foreach ($items as $item): ?>
                                <li class="flex items-start gap-3">
                                    <?php if (strpos(strtolower($item['type']), 'book') !== false): ?>
                                        <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                            </path>
                                        </svg>
                                    <?php elseif (strpos(strtolower($item['type']), 'video') !== false): ?>
                                        <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    <?php else: ?>
                                        <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1">
                                            </path>
                                        </svg>
                                    <?php endif; ?>
                                    <a href="<?php echo $item['url']; ?>" target="_blank" rel="noopener noreferrer"
                                        class="text-gray-700 hover:text-primary transition-colors font-medium text-sm leading-tight inline-block">
                                        <?php echo $item['title']; ?>
                                        <span
                                            class="inline-block text-[10px] text-gray-400 font-normal ml-1 whitespace-nowrap bg-gray-50 px-1.5 py-0.5 rounded-md border border-gray-100"><?php echo trim($item['type'], "[]"); ?></span>
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
        <div
            class="absolute inset-0 opacity-10 bg-[url('/assets/wp-content/uploads/2023/10/brick-background-59-819x1024.png')] bg-cover bg-center">
        </div>
        <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
            <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6">Need Personalized Support?</h2>
            <p class="text-white/90 text-lg mb-10">Our resources are great, but sometimes you need a professional to
                talk to. GlobeCoRe is here for you.</p>
            <a href="/contact.php"
                class="inline-block bg-white text-[#071e26] font-bold py-4 px-10 rounded-full hover:shadow-lg hover:bg-gray-50 transition-all duration-300 text-lg">Contact
                Us Today</a>
        </div>
    </section>

    <?php include "partials/footer.php"; ?>
</body>

</html>