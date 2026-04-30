<?php
/**
 * Navigation data for GlobeCoRe website
 * Single source of truth for all navigation links
 * Uses ROOT-RELATIVE paths so links always work regardless of page depth
 */

// About subpages
$aboutLinks = [
    ['href' => '/about/', 'label' => 'About Us'],
    ['href' => '/about/meet-our-team.php', 'label' => 'Meet Our Team'],
    ['href' => '/about/philosophy-core-values.php', 'label' => 'Philosophy & Values'],
];

// Services subpages
$servicesLinks = [
    ['href' => '/services/counseling.php', 'label' => 'Counseling-Psychotherapy'],
    ['href' => '/services/medication-management.php', 'label' => 'Medication Management'],
    ['href' => '/services/tms-therapy.php', 'label' => 'TMS Therapy'],
    ['href' => '/services/tricare-tms-therapy.php', 'label' => 'TRICARE-Covered TMS Therapy'],
];

// Specialties subpages
$specialtiesLinks = [
    ['href' => '/specialties/addiction.php', 'label' => 'Addiction'],
    ['href' => '/specialties/adhd.php', 'label' => 'ADHD'],
    ['href' => '/specialties/aging-issues.php', 'label' => 'Aging Issues'],
    ['href' => '/specialties/anger-management.php', 'label' => 'Anger Management'],
    ['href' => '/specialties/bipolar-disorder.php', 'label' => 'Bipolar Disorder'],
    ['href' => '/specialties/chronic-illness.php', 'label' => 'Chronic Illness'],
    ['href' => '/specialties/codependency.php', 'label' => 'Codependency'],
    ['href' => '/specialties/depression-anxiety.php', 'label' => 'Depression & Anxiety'],
    ['href' => '/specialties/developmental-intellectual-disabilities.php', 'label' => 'Developmental & Intellectual Disabilities'],
    ['href' => '/specialties/eating-disorders.php', 'label' => 'Eating Disorders'],
    ['href' => '/specialties/fertility-pregnancy-parenting.php', 'label' => 'Fertility, Pregnancy & Parenting'],
    ['href' => '/specialties/finding-purpose.php', 'label' => 'Finding Purpose'],
    ['href' => '/specialties/finding-the-love-you-deserve.php', 'label' => 'Finding The Love You Deserve'],
    ['href' => '/specialties/grief-loss.php', 'label' => 'Grief & Loss'],
    ['href' => '/specialties/life-transitions.php', 'label' => 'Life Transitions'],
    ['href' => '/specialties/lgbtqi.php', 'label' => 'LGBTQI+'],
    ['href' => '/specialties/ocd.php', 'label' => 'OCD'],
    ['href' => '/specialties/racial-ethnic-and-religious-stressors.php', 'label' => 'Racial, Ethnic and Religious Stressors'],
    ['href' => '/specialties/relationship-marriage-issues.php', 'label' => 'Relationship & Marriage Issues'],
    ['href' => '/specialties/self-esteem.php', 'label' => 'Self-Esteem'],
    ['href' => '/specialties/sleep-disorders.php', 'label' => 'Sleep Disorders'],
    ['href' => '/specialties/trauma.php', 'label' => 'Trauma'],
    ['href' => '/specialties/women-s-issues.php', 'label' => "Women's Issues"],
    ['href' => '/specialties/work-related-or-academic-stressors.php', 'label' => 'Work-Related or Academic Stressors'],
];

// Areas we serve
$areasLinks = [
    ['href' => '/areas-we-serve/marietta.php', 'label' => 'Marietta'],
    ['href' => '/areas-we-serve/alpharetta.php', 'label' => 'Alpharetta'],
    ['href' => '/areas-we-serve/sandy-springs.php', 'label' => 'Sandy Springs'],
    ['href' => '/areas-we-serve/brookhaven.php', 'label' => 'Brookhaven'],
    ['href' => '/areas-we-serve/decatur.php', 'label' => 'Decatur'],
    ['href' => '/areas-we-serve/smyrna.php', 'label' => 'Smyrna'],
    ['href' => '/areas-we-serve/johns-creek.php', 'label' => 'Johns Creek'],
    ['href' => '/areas-we-serve/dunwoody.php', 'label' => 'Dunwoody'],
    ['href' => '/areas-we-serve/peachtree-corners.php', 'label' => 'Peachtree Corners'],
    ['href' => '/areas-we-serve/lawrenceville.php', 'label' => 'Lawrenceville'],
    ['href' => '/areas-we-serve/duluth.php', 'label' => 'Duluth'],
    ['href' => '/areas-we-serve/woodstock.php', 'label' => 'Woodstock'],
    ['href' => '/areas-we-serve/canton.php', 'label' => 'Canton'],
    ['href' => '/areas-we-serve/newnan.php', 'label' => 'Newnan'],
    ['href' => '/areas-we-serve/peachtree-city.php', 'label' => 'Peachtree City'],
];

// Specialties columns (3 per column)
$specialtiesCol1 = array_slice($specialtiesLinks, 0, 8);
$specialtiesCol2 = array_slice($specialtiesLinks, 8, 8);
$specialtiesCol3 = array_slice($specialtiesLinks, 16);