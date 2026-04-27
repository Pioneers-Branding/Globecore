<?php
/**
 * Navigation data for GlobeCoRe website
 * Single source of truth for all navigation links
 */

// Detect base path from current file location
$scriptPath = dirname($_SERVER['PHP_SELF']);
$depth = max(0, substr_count($scriptPath, '/') - 1);
$P = str_repeat('../', $depth);

// About subpages
$aboutLinks = [
    ['href' => $P . 'about/', 'label' => 'About Us'],
    ['href' => $P . 'about/meet-our-team.php', 'label' => 'Meet Our Team'],
    ['href' => $P . 'about/philosophy-core-values.php', 'label' => 'Philosophy & Values'],
];

// Services subpages
$servicesLinks = [
    ['href' => $P . 'services/counseling.php', 'label' => 'Counseling-Psychotherapy'],
    ['href' => $P . 'services/medication-management.php', 'label' => 'Medication Management'],
    ['href' => $P . 'services/tms-therapy.php', 'label' => 'TMS Therapy'],
    ['href' => $P . 'services/tricare-tms-therapy.php', 'label' => 'TRICARE-Covered TMS Therapy'],
];

// Specialties subpages
$specialtiesLinks = [
    ['href' => $P . 'specialties/addiction.php', 'label' => 'Addiction'],
    ['href' => $P . 'specialties/adhd.php', 'label' => 'ADHD'],
    ['href' => $P . 'specialties/aging-issues.php', 'label' => 'Aging Issues'],
    ['href' => $P . 'specialties/anger-management.php', 'label' => 'Anger Management'],
    ['href' => $P . 'specialties/bipolar-disorder.php', 'label' => 'Bipolar Disorder'],
    ['href' => $P . 'specialties/chronic-illness.php', 'label' => 'Chronic Illness'],
    ['href' => $P . 'specialties/codependency.php', 'label' => 'Codependency'],
    ['href' => $P . 'specialties/depression-anxiety.php', 'label' => 'Depression & Anxiety'],
    ['href' => $P . 'specialties/developmental-intellectual-disabilities.php', 'label' => 'Developmental & Intellectual Disabilities'],
    ['href' => $P . 'specialties/eating-disorders.php', 'label' => 'Eating Disorders'],
    ['href' => $P . 'specialties/fertility-pregnancy-parenting.php', 'label' => 'Fertility, Pregnancy & Parenting'],
    ['href' => $P . 'specialties/finding-purpose.php', 'label' => 'Finding Purpose'],
    ['href' => $P . 'specialties/finding-the-love-you-deserve.php', 'label' => 'Finding The Love You Deserve'],
    ['href' => $P . 'specialties/grief-loss.php', 'label' => 'Grief & Loss'],
    ['href' => $P . 'specialties/life-transitions.php', 'label' => 'Life Transitions'],
    ['href' => $P . 'specialties/lgbtqi.php', 'label' => 'LGBTQI+'],
    ['href' => $P . 'specialties/ocd.php', 'label' => 'OCD'],
    ['href' => $P . 'specialties/racial-ethnic-and-religious-stressors.php', 'label' => 'Racial, Ethnic and Religious Stressors'],
    ['href' => $P . 'specialties/relationship-marriage-issues.php', 'label' => 'Relationship & Marriage Issues'],
    ['href' => $P . 'specialties/self-esteem.php', 'label' => 'Self-Esteem'],
    ['href' => $P . 'specialties/sleep-disorders.php', 'label' => 'Sleep Disorders'],
    ['href' => $P . 'specialties/trauma.php', 'label' => 'Trauma'],
    ['href' => $P . 'specialties/women-s-issues.php', 'label' => "Women's Issues"],
    ['href' => $P . 'specialties/work-related-or-academic-stressors.php', 'label' => 'Work-Related or Academic Stressors'],
];

// Areas we serve
$areasLinks = [
    ['href' => $P . 'areas-we-serve/marietta.php', 'label' => 'Marietta'],
    ['href' => $P . 'areas-we-serve/alpharetta.php', 'label' => 'Alpharetta'],
    ['href' => $P . 'areas-we-serve/sandy-springs.php', 'label' => 'Sandy Springs'],
    ['href' => $P . 'areas-we-serve/brookhaven.php', 'label' => 'Brookhaven'],
    ['href' => $P . 'areas-we-serve/decatur.php', 'label' => 'Decatur'],
    ['href' => $P . 'areas-we-serve/smyrna.php', 'label' => 'Smyrna'],
    ['href' => $P . 'areas-we-serve/johns-creek.php', 'label' => 'Johns Creek'],
    ['href' => $P . 'areas-we-serve/dunwoody.php', 'label' => 'Dunwoody'],
    ['href' => $P . 'areas-we-serve/peachtree-corners.php', 'label' => 'Peachtree Corners'],
    ['href' => $P . 'areas-we-serve/lawrenceville.php', 'label' => 'Lawrenceville'],
    ['href' => $P . 'areas-we-serve/duluth.php', 'label' => 'Duluth'],
    ['href' => $P . 'areas-we-serve/woodstock.php', 'label' => 'Woodstock'],
    ['href' => $P . 'areas-we-serve/canton.php', 'label' => 'Canton'],
    ['href' => $P . 'areas-we-serve/newnan.php', 'label' => 'Newnan'],
    ['href' => $P . 'areas-we-serve/peachtree-city.php', 'label' => 'Peachtree City'],
];

// Specialties columns (3 per column)
$specialtiesCol1 = array_slice($specialtiesLinks, 0, 8);
$specialtiesCol2 = array_slice($specialtiesLinks, 8, 8);
$specialtiesCol3 = array_slice($specialtiesLinks, 16);