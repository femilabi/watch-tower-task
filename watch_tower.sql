-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2025 at 01:03 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watch_tower`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `domain_id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `reference` varchar(25) NOT NULL,
  `post_title` varchar(150) NOT NULL,
  `post_description` text NOT NULL,
  `post_content` text NOT NULL,
  `post_unique` varchar(150) NOT NULL,
  `post_image` text NOT NULL,
  `post_type` enum('user','admin') NOT NULL DEFAULT 'user',
  `post_views` int(11) NOT NULL DEFAULT 0,
  `post_status` enum('pending','approved','disapproved','published','removed') NOT NULL DEFAULT 'approved',
  `is_seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `domain_id`, `cate_id`, `reference`, `post_title`, `post_description`, `post_content`, `post_unique`, `post_image`, `post_type`, `post_views`, `post_status`, `is_seen`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 4, '0', 'Tinubu gives D’Tigress $100,000 each, flats, national honour', 'Tinubu gives D’Tigress $100,000 each, flats, national honour', '<p><span>President Bola Tinubu has honoured Nigeria’s national women’s basketball team, D’Tigress, with a reward package that includes $100,000 for each player, $50,000 for every member of the 11-man coaching and technical crew.</span></p><p><span>Tinubu also rewarded all team members and staff with a three-bedroom flat at the Renewed Hope Estate.</span></p><p><span>In addition, the President conferred on the players and their technical crew the prestigious national honour of Officer of the Order of the Niger.</span></p><p><span>This was announced by Vice President Kashim Shettima at the presidential reception in their honour at the State House Banquet hall, Abuja.</span></p><p><span>The triumphant D’Tigress alongside their officials, were warmly welcomed by First Lady Oluremi Tinubu, supported by the wife of the Vice President, Nana Shettima, at the New Banquet Hall in the Presidential Villa at 5:05 pm.</span></p><p><span>On behalf of President Bola Tinubu, Shettima received the team in recognition of their outstanding achievement.</span></p><p><span>Also in attendance at the reception were Chief of Staff to the President, Femi Gbajabiamila; Chairman of the Senate Committee on Youths and Sports Development, Garba Maidoki; and Chairman of the House Committee on Sports, Kabiru Amadou.</span></p><p><span>The D’Tigress arrived after clinching their historic fifth consecutive AfroBasket title, outplaying Mali 78–64 in the final held at the Palais des Sports de Treichville in Abidjan, Côte d’Ivoire.</span></p><p><span>This win marks their seventh overall championship, reinforcing their supremacy in African women’s basketball.</span></p><p><span>The ceremony at the Presidential Villa mirrors a similar reception President Tinubu hosted a week earlier for the national female football team, the Super Falcons, who recently secured their tenth WAFCON title in Rabat, Morocco.</span></p><p><span>Tinubu’s remarks, delivered by Shettima at the reception noted, “Beyond being ambassadors of our nation and symbols of excellence, you have reminded us all of the power of sports to unite a diverse nation. Your victory is a testament to what we can achieve when we work together. You have brought home not just a trophy, but valuable lessons for all Nigerians.</span></p><p><span>“It is a great honour, on behalf of President Bola Ahmed Tinubu GCFR, to welcome our formidable D’Tigress to the State House. Once again, you are continental champions and now the top African team to qualify for the 2026 FIBA Women’s World Cup pre-qualifying tournament. You conquered Africa with a score of 78 to 64—showcasing not just tactical skill, but remarkable determination and resilience. The entire nation stands behind you with pride and support.</span></p><p><span>Related News</span></p><ul><li><a><span> Middle class has been wiped out under Tinubu – Falana</span></a></li><li><a><span> Katsina gov congratulates D’Tigress on AfroBasket victory</span></a></li><li><a><span> N\'Assembly to vote on special seats bill after recess – Deputy speaker</span></a></li></ul><p><span>“My dear daughters, you faced challenges bravely, especially in the final quarter, responding not with panic but with poise. When you wore the green and white, it was more than just a uniform—you wore it with purpose, and now you wear the crown of African basketball for the fifth consecutive time.”</span></p><p><span>The President hailed Rena Wakama’s strength and inspiring young girls in the country.</span></p><p><span>“Coach Rena Wakama, you embody the evolution of leadership in Nigerian sports. Your quiet strength and remarkable achievements have shattered ceilings and inspired countless young girls across Nigeria. You truly deserve your accolades as the best coach in Africa and beyond.</span></p><p><span>“To Amy Okonkwo, the tournament’s Most Valuable Player, and Ezinne Kalu, the top scorer in the final, your brilliance lifted the whole team, but most importantly, you played for Nigeria and made us all proud.</span></p><p><span>“Let us reflect on one profound truth: Nigerian women have never failed the nation in sports. From the Super Falcons on the world stage, to record-breakers on the track, and now a basketball dynasty, our women have consistently been a source of pride and have proven that where preparation meets opportunity, Nigerian excellence prevails.”</span></p><p><span>Tinubu said the administration is prioritizing sports as a crucial driver of national development and economic growth, viewing it as more than entertainment but also infrastructure, education, diplomacy, and a tool for youth employment and transformation.</span></p><p><span>He also recognised the National Sports Commission, led by Mallam Alabi, for its efforts in athlete welfare, institutional reform, grassroots support, and performance-driven development, with visible positive results.</span></p><p><span>“Special appreciation goes to the National Sports Commission, under Mallam Alabi, for renewed focus on athlete welfare, institutional reform, grassroots support, and performance-based development. The results are evident, and we are proud of you. The Nigerian Basketball Federation, led by Malam Ahmadu Musa Kida, also deserves recognition for consistent team development and dedication to Nigeria’s sporting glory.</span></p><p><span>“Our government will ensure that D’Tigress, their technical team, and sports leadership in Nigeria are appropriately recognized and rewarded. You have made us proud, and we will stand by you as you prepare for the global stage.</span></p><p><span>“To all Nigerian youth, let the story of D’Tigress inspire you. Greatness stems from hard work, discipline, and belief. Nigeria belongs to those who dare to dream and are willing to give their all to realize those dreams.</span></p><p><span>“D’Tigress: you are champions, role models, pathfinders, and true daughters of this land. It is my honor and privilege, on behalf of President Tinubu, to announce national honors for the team, coach, and technical staff; $100,000 for each player; $50,000 for the coach and technical team; and more rewards to come.</span></p><p><span>“This is true leadership—recognizing and rewarding those who have excelled for our nation. May God bless you all, may God bless Nigerian sports, and may God bless the Federal Republic of Nigeria,” he concluded.</span></p>', 'tinubu-gives-d-tigress-100-000-each-flats-national-honour', 'http://localhost/watch-tower/app/uploads/posts/1754342811-146.jpeg', 'user', 0, 'approved', 0, '2025-08-04 21:26:51', '2025-08-04 21:26:51'),
(2, 1, 0, 4, '0', 'Presidency faults Obi’s one-term promise, says Lincoln, JFK', 'Presidency faults Obi’s one-term promise, says Lincoln, JFK examples misleading', '<p><span>The Special Adviser to President Bola Tinubu on Media and Publicity, Bayo Onanuga, has taken a swipe at former Labour Party presidential candidate, Peter Obi, over his recent pledge to serve only one term if elected in 2027.</span></p><p><span>Obi, in a post via his X handle on Sunday, </span><a><b><strong style=\"font-weight:bolder;\">cited</strong></b></a><span> global leaders such as Abraham Lincoln, John F. Kennedy, and Nelson Mandela as his inspirations for making the “sacrosanct” promise.</span></p><p><span>But Onanuga, in a statement via his X handle on Monday, described Obi’s references as inaccurate and historically misleading.</span></p><p><span>According to Onanuga, a simple fact-check by Obi would have revealed that none of the leaders he cited served only one term by choice or under similar circumstances.</span></p><p><span>“Lincoln, at the time he was assassinated, had finished his first term, had won re-election, and had been sworn in for a second term,” Onanuga said, pointing out that the American president began his first term on March 4, 1861, won re-election in November 1864, and had been inaugurated for a second term on March 4, 1865, before his assassination on April 15 of that year.</span></p><p><span>Related News</span></p><ul><li><a><span> VIDEO: Former Ogun Gov\'s Wife Hops on Popular Nicki Minaj Music Video Challenge</span></a></li><li><a><span> Middle class has been wiped out under Tinubu – Falana</span></a></li><li><a><span> 2027: INEC warns political parties against premature campaigning</span></a></li></ul><p><span>He also noted that JFK, another American president Obi referenced, did not complete even a single term. “John F. Kennedy came into office on January 20, 1960, and was assassinated on November 22, 1963, before the end of his first term,” Onanuga stated.</span></p><p><span>While acknowledging that Mandela indeed served only one term, Onanuga argued that the South African icon declined a second term due to his age, not as a campaign commitment.</span></p><p><span>“Mandela’s example might be more appropriately recommended to Obi’s rival for the opposition ticket, who will turn 81 by 2027,” he added in a veiled reference.</span></p><p><span>Obi has not yet formally declared his candidacy for 2027, but his recent comments and public engagements have reignited speculation about his political ambition.</span></p>', 'presidency-faults-obi-s-one-term-promise-says-lincoln-jfk', 'http://localhost/watch-tower/app/uploads/posts/1754343315-247.jpg', 'user', 0, 'approved', 0, '2025-08-04 21:35:15', '2025-08-04 21:35:15'),
(3, 1, 0, 6, '0', 'Step-by-step guide for checking 2025 WASSCE results', 'Step-by-step guide for checking 2025 WASSCE results', '<p><span>Following the release of the 2025 West African Senior School Certificate Examination results on Monday, the West African Examinations Council has provided a step-by-step guide to help candidates access their results online.</span></p><p><span>To check your results, candidates are required to visit the official result portal at http://waecdirect.org and follow the instructions carefully.</span></p><p><span>Related News</span></p><ul><li><a><span> 38.32% of candidates score five credits Including English, Mathematics</span></a></li><li><a><span> UPDATED: WAEC releases 2025 WASSCE results</span></a></li><li><a><span> CBT SSCE requires caution</span></a></li></ul><p><span>PUNCH Online highlights the step-by-step guide for checking 2025 WASSCE results.</span></p><ul><li><span>Enter your 10-digit WAEC Examination Number.</span><br /><span>(This is your 7-Digit centre number followed by your 3-digit candidate number eg. 4123456789).</span><br /><span>For examination year &lt; 1999, enter your 8-digit WAEC Examination Number.</span><br /><span>(This is your 5-Digit centre number followed by your 3-digit candidate number eg. 19865001)</span></li><li><span>Enter the 4 digits of your Examination Year eg. 2002</span></li><li><span>Select the Type of Examination</span></li><li><span>Enter the e-PIN Voucher Number</span></li><li><span>Enter the Personal Identification Number (PIN) on your e-PIN</span></li><li><span>Click Submit and wait for the results window to come up</span></li></ul><p><br /></p>', 'step-by-step-guide-for-checking-2025-wassce-results', 'http://localhost/watch-tower/app/uploads/posts/1754343503-956.jpeg', 'user', 10, 'approved', 0, '2025-08-04 21:38:23', '2025-08-04 21:57:16'),
(4, 1, 0, 6, '0', '‘I went to a prison-like school,’ other Kemi Badenoch’s crit', '‘I went to a prison-like school,’ other Kemi Badenoch’s critical remarks on Nigeria', '<p><span>The leader of the British Conservative Party, Kemi Badenoch, has again come under criticism after she admitted that attending a Federal Government Girls College, Sagamu, Ogun State, was a prison experience for her.</span></p><p><span>Badenoch, who is known for denigrating Nigeria, despite being raised in Lagos State, the South-Western part of the country, again stated her distaste about what she described as “maltreatment and forced labour” when she shared her experience of being given a machete to cut grass and buckets to fetch water in the school.</span></p><p><span>Born in Wimbledon, London, in 1980, she spent most of her childhood in Nigeria and the United States before returning to the UK at age 16.</span></p><p><span>She is one of the last people to have received birthright citizenship in the UK before it was abolished by Margaret Thatcher’s government in 1981.</span></p><p><span>Speaking in a recent viral clip, she noted that her experience was drawn from the ‘Lord of the Flies’ book, stressing that the students were in control.</span></p><p><span>“I went to a secondary school, it was called a Federal Government girls’ school in a place called Sagamu. And that was like being in prison when I tell the stories about using a machete and having to fetch buckets of water.</span></p><p><span>“And that was the first time that I was away from home, away from my family. It’s a federal boarding school. And it was a dormitory with about 150 (girls), I think, 20 to 30 in a room. And there were, you know, six rooms.</span></p><p><span>“The machete was for cutting the grass. Well, because who else is going to cut the grass?” she said.</span></p><p><span>This is not the only Badenoch smear remark about Nigeria and her people; however, in this report, PUNCH Online draws out some other comments that the popular Conservative Party’s leader has made about the country.</span></p><p><b><strong style=\"font-weight:bolder;\">I don’t identify as a Nigerian</strong></b></p><p><span>On August 1, 2025, while speaking on the Rosebud podcast with Gyles Brandeth, she disclosed that she had not renewed her Nigerian passport in over 20 years and no longer identifies as Nigerian, despite her ancestry and upbringing in the country.</span></p><p><span>“I’m Nigerian through ancestry, by birth, despite not being born there because of my parents, but by identity I’m not really.</span></p><p><span>“I know the country very well, I have a lot of family there, and I’m very interested in what happens there,” Badenoch said.</span></p><p><b><strong style=\"font-weight:bolder;\">I grew up in Nigeria, a place where fear is everywhere</strong></b></p><p><span>Badenoch, while giving a speech at the UK Conservative conference in October 2024 to run for the leader of the party, noted that she grew up in constant fear, living in Lagos with her parents.</span></p><p><span>She said, “I was born here (UK), but I grew up in a place where fear was everywhere. You cannot understand it unless you’ve lived it.</span></p><p><span>“Triple checking that all the doors and windows are locked, waking up in the night at every sound, listening as you hear your neighbour scream as they are being burgled and beaten, and wondering if your home would be next.”</span></p><p><b><strong style=\"font-weight:bolder;\">My children can’t be Nigerians because I’m a woman</strong></b></p><p><span>Badenoch, in an interview with CNN’s Fareed Zakaria, launched a blistering critique of what she termed the “exploitation of tolerance” in modern Britain by saying that her children cannot get Nigerian passports because she is a woman and her nationality cannot be automatically transferred to her offspring because of her gender.</span></p><p><span>“Not all cultures are equal,” Badenoch declared. “Cultures where child marriage is normal, where gay people are killed, where women are treated as second-class citizens — those are not equal cultures. And I will not accept that.”</span></p><p><span>Related News</span></p><ul><li><a><span> VIDEO: Former Ogun Gov\'s Wife Hops on Popular Nicki Minaj Music Video Challenge</span></a></li><li><a><span> Middle class has been wiped out under Tinubu – Falana</span></a></li><li><a><span> Katsina gov congratulates D’Tigress on AfroBasket victory</span></a></li></ul><p><span>“This is exploitation of a system that was not designed for this sort of thing. You have to be honest about that. So you say to somebody who’s coming from Nigeria and wants to create a little mini-Nigeria in Britain – ‘No, that is not right.’ And Nigerians would not tolerate that. That’s not something that many countries would accept.</span></p><p><span>“There are many people who come to our country, to the UK, who do things that would not be acceptable in their countries. It’s virtually impossible, for example, to get Nigerian citizenship. I had that citizenship by virtue of my parents.</span></p><p><span>“I can’t give it to my children because I’m a woman. Yet loads of Nigerians come to the UK, stay for a relatively brief period of time, acquire British citizenship. We need to stop being naive.”</span></p><p><span>*Britain may face consequences similar to those seen in Nigeria if…*</span></p><p><span>The conservative leader, while making a comparison between the United Kingdom and Nigeria in her first speech of the year 2025, warned that Britain could face consequences similar to those seen in countries with “terrible governments” like Nigeria if reforms are not enacted.</span></p><p><span>“And why does this matter so much to me? It’s because I know what it is like to have something and then to lose it,” Badenoch told the audience.</span></p><p><span>“I don’t want Britain to lose what it has. I grew up in a poor country and watched my relatively wealthy family become poorer and poorer, despite working harder and harder as their money disappeared with inflation.</span></p><p><span>“I came back to the UK aged 16 with my father’s last £100 in the hope of a better life. So I have lived with the consequences of terrible governments that…”</span></p><p><b><strong style=\"font-weight:bolder;\">Nigeria police stole my brother’s wristwatch, shoes</strong></b></p><p><span>On December 14, 2024, Badenoch, sparked another controversy about Nigeria when she shared her negative experiences with the Nigerian police.</span></p><p><span>In an interview with The Free Press, the British politician was asked whether she trusted the British police.</span></p><p><span>Responding to the question, Badenoch said, “I do. My experience with the police in Nigeria was very negative, and coming to the UK, my first experience with the police was very positive. The police in Nigeria would rob us.</span></p><p><span>“I remember the police stealing my brother’s shoes and his watch. It’s a very poor country, so people do all sorts of things.”</span></p><p><b><strong style=\"font-weight:bolder;\">When Nigeria mattered to Badenoch</strong></b></p><p><span>Despite all her spiteful remarks, Badenoch had sometimes presented herself as a great card-carrying citizen of Nigeria, especially when she contested to be a legislator for Dulwich &amp; West Norwood in the 2010 UK general elections; she needed Nigerian votes to achieve that.</span></p><p><span>Therefore, she associated with Nigerians, moderated her language, pushed her Nigerianness and sought the support of Nigerians.</span></p><p><span>“As you know, I’m running for parliament in the 2010 UK general elections for Dulwich &amp; West Norwood. The race is very tight…. There are just about 20 days to go before polling day, and Nigerians have been fantastic. My immediate circle of friends, ex-schoolmates, their friends, and all our families have really rallied around and been supportive ….</span></p><p><span>“Like you, I am sick and tired of reading that Nigerians are fraudsters, terrorists, bombing aeroplanes, or slaughtering each other in places like Jos…. I am asking for your help now to support a Nigerian who will improve our national image and do something great here….</span></p><p><span>“This is a chance to have someone with real influence over British-Nigerian relations. It will not be about personal gain. For regular updates, please join my fan page here and my ‘Nigerians for Kemi’ mailing list by clicking here or email me for more details and forward this to as many Nigerians as you know. – Kemi,” she wrote on her social handles in 2010 during the campaign.</span></p>', 'i-went-to-a-prison-like-school-other-kemi-badenoch-s-crit', 'http://localhost/watch-tower/app/uploads/posts/1754343762-202.jpg', 'user', 10, 'approved', 0, '2025-08-04 21:42:42', '2025-08-04 21:49:52'),
(5, 1, 0, 4, '0', '2027: Obi’s one-term Presidency gambit sparks political fire', '2027: Obi’s one-term Presidency gambit sparks political firestorm', '<p style=\"text-align:justify;\"><span>Labour Party’s 2023 presidential candidate, Peter Obi, has come under fire from the All Progressives Congress and a faction of his party after reaffirming his vow to serve only one term if elected president in 2027.</span></p><p style=\"text-align:justify;\"><span>In a statement on Sunday, Obi declared the pledge “sacrosanct,” drawing criticism from APC spokespersons and a divided reaction from the Labour Party.</span></p><p style=\"text-align:justify;\"><span>While the Abure-led leadership of the LP dismissed the vow as political theatrics, the rival caretaker faction led by Senator Nenadi Usman endorsed the commitment, citing Obi’s record of principled leadership.</span></p><p style=\"text-align:justify;\"><span>The APC, however, described Obi’s promise as insincere and a ploy to woo voters.</span></p><p style=\"text-align:justify;\"><span>Anambra State Governor, Prof Chukwuma Soludo, had earlier cast doubt on claims of one-term presidency by Obi.</span></p><p style=\"text-align:justify;\"><span>Soludo dismissed the one-term pledge, saying any politician making such a promise should be sent for psychiatric evaluation.</span></p><p style=\"text-align:justify;\"><span>“How can anybody with a functioning brain say that? Do you think you’re speaking to fools? You come to people and say you will do only one term.</span></p><p style=\"text-align:justify;\"><span>“Any politician who says that must be sent to a psychiatric home because the person must have some mental problem,” Soludo said during a political rally in Anambra South.</span></p><p style=\"text-align:justify;\"><span>The governor argued that the Nigerian Constitution provides for a renewable four-year tenure and questioned the wisdom of any politician voluntarily limiting themselves to a single term.</span></p><p style=\"text-align:justify;\"><span>In response on Sunday, Obi, in a statement on X, invoked the legacies of revered leaders such as Abraham Lincoln, John F. Kennedy, and Nelson Mandela to justify his position that impactful leadership is not measured by longevity in office.</span></p><p style=\"text-align:justify;\"><span>Without naming names, just as Soludo hadn’t, Obi reaffirmed that his pledge to serve only one term if elected president remains sacrosanct.</span></p><p style=\"text-align:justify;\"><span>Obi said, “One of the greatest American Presidents, Abraham Lincoln, served only four years, yet his legacy endures as a model of principled leadership.</span></p><p style=\"text-align:justify;\"><span>“Another iconic figure, John F. Kennedy, did not even complete a full term, yet his vision and ideals continue to inspire generations.</span></p><p style=\"text-align:justify;\"><span>“In Africa, Nelson Mandela, revered globally as a symbol of justice and reconciliation, chose to serve only one term as President of South Africa, despite immense public pressure to stay longer.</span></p><p style=\"text-align:justify;\"><span>“Indeed, history shows that the longer many African leaders remain in power, the more likely they are to be corrupted by it. Longevity in office is not a mark of success; rather, it is purposeful, accountable service — however brief — that defines true statesmanship.”</span></p><p style=\"text-align:justify;\"><span>The former Anambra governor declared: “It is within this context that I reiterate my vow: I will serve only one term of four years if elected President. And that vow is sacrosanct.”</span></p><p style=\"text-align:justify;\"><span>Although Obi claimed his one-term promise was spurred out of genuine concerns, he did not betray emotion by the scepticism that had since trailed his declaration.</span></p><p style=\"text-align:justify;\"><span>He, however, assured Nigerians that the negative reviews he had been getting wouldn’t deter him.</span></p><p style=\"text-align:justify;\"><span>“Recently, I became aware of two statements aimed, albeit indirectly, at my vow to serve only a single four-year term.</span></p><p style=\"text-align:justify;\"><span>“One person remarked that even if I swore by a shrine, I still wouldn’t be believed.</span></p><p style=\"text-align:justify;\"><span>“Another suggested that anyone talking about doing only one term should undergo psychiatric evaluation.</span></p><p><span>Related News</span></p><ul><li><a><span> VIDEO: Former Ogun Gov\'s Wife Hops on Popular Nicki Minaj Music Video Challenge</span></a></li><li><a><span> Middle class has been wiped out under Tinubu – Falana</span></a></li><li><a><span> 2027: INEC warns political parties against premature campaigning</span></a></li></ul><p style=\"text-align:justify;\"><span>“I understand the basis of their scepticism. They are judging me by their own standards, where political promises are made to be broken.</span></p><p style=\"text-align:justify;\"><span>“But they forget, or perhaps choose to ignore, that Peter Obi is not cut from that cloth. I have a verifiable track record that speaks louder than speculation,” he said.</span></p><p style=\"text-align:justify;\"><span>He emphasised that his resolve to serve only one term of four years was a solemn commitment, rooted in the conviction that purposeful and transparent leadership did not require an eternity.</span></p><p style=\"text-align:justify;\"><span>He further outlined his agenda to sanitise governance, tackle insecurity, prioritise education and transform Nigeria into a productive economy.</span></p><p style=\"text-align:justify;\"><span>“Forty-eight months is enough for any leader who is focused and prepared to make a meaningful difference.</span></p><p style=\"text-align:justify;\"><span>“These are not utopian dreams. They are realistic, actionable goals that are achievable within four years,” he maintained.</span></p><p style=\"text-align:justify;\"><span>Speaking exclusively with The PUNCH on the issue, the National Publicity Secretary of the LP, Mr Obiorah Ifoh, noted that as a party, the LP had a programme that everyone elected on its platform must stick with.</span></p><p style=\"text-align:justify;\"><span>He said,  “The Labour Party has a programme to implement when it gets into government. Regardless of who the party fields as its presidential candidate in 2027, the person will run with the programmes and policies of the party.</span></p><p style=\"text-align:justify;\"><span>“I think it is too early to start talking about 2031 when we are still trying to sort out 2027. The LP has thrown its presidential ticket open. We don’t even know who will emerge as the candidate because there are so many people who have shown interest.</span></p><p style=\"text-align:justify;\"><span>“As our former presidential candidate, we wish Obi well in his career, including his ambition to govern for one term. The politician in him has seen that it is the right thing to do, and if that is what he wants to do, we are fine.”</span></p><p style=\"text-align:justify;\"><span>On his part, the spokesperson to Senator Usman’s faction, Ken Asogwa, backed Obi to turn the fortunes of the nation around in four years if given the opportunity.</span></p><p style=\"text-align:justify;\"><span>He said, “Mr Peter Obi’s one-term promise is anchored in character and track record. He has consistently maintained that if it took this present administration just two years to plunge Nigeria into its current sorry state, then four years would be more than sufficient to begin the process of putting the country back on a sound and progressive trajectory.</span></p><p style=\"text-align:justify;\"><span>“We understand that some Nigerians harbour legitimate fears – that the allure of office may eventually cause him to walk back on this solemn pledge, especially as such promises are not legally binding.</span></p><p style=\"text-align:justify;\"><span>“However, when leaders make commitments, the public must turn to history and examine their past conduct. That is where true assurances lie  –  not in mere words, but in character and precedent.”</span></p><p style=\"text-align:justify;\"><span>According to Asogwa, “As governor of Anambra State, Obi kept faith with the people. He governed in strict adherence to the constitution and the rule of law, so much so that he was impeached by the state House of Assembly for being uncompromising in his commitment to transparency, accountability, and due process. He challenged that impeachment in court, won, and was reinstated  – a first in Nigerian political history.</span></p><p style=\"text-align:justify;\"><span>“That singular act demonstrated the kind of leadership he represents: one rooted in principle, not convenience.</span></p><p style=\"text-align:justify;\"><span>“As a political party, we do not doubt his integrity. We are confident that, if entrusted with the presidency, Mr Obi would honour his word and serve only one term, as he has repeatedly promised. History is filled with examples of principled leaders who chose to serve their people for just one term, even when a second was within reach.”</span></p><p style=\"text-align:justify;\"><span>The Director of Publicity of the APC, Bala Ibrahim, described Obi as a man playing to the gallery, saying his words lacked sincerity.</span></p><p style=\"text-align:justify;\"><span>“He is playing to the gallery. Obi is not sincere. What is there to guarantee that he will stick to the agreement if he is given the opportunity, knowing that he has the constitutional right to go for eight years? All these are antics aimed at deceiving the electorate or deceiving the coalition to give him the ticket. This is a proof of his desperation for power,” he said.</span></p><p style=\"text-align:justify;\"><span>He added that “Obi is not doing this for the good of the country. He has nothing to offer. The APC is doing everything to bring democratic dividends to the people, and the reforms introduced by the government are beginning to yield fruits.</span></p><p style=\"text-align:justify;\"><span>“They have seen this, and that is why they are coming up with shenanigans of ‘give me one term.’ Obi will not respect that agreement.”</span></p>', '2027-obi-s-one-term-presidency-gambit-sparks-political-fire', 'http://localhost/watch-tower/app/uploads/posts/1754343974-894.jpeg', 'user', 20, 'approved', 0, '2025-08-04 21:46:14', '2025-08-04 21:49:23'),
(6, 1, 0, 7, '0', 'Middle class has been wiped out under Tinubu – Falana', 'Middle class has been wiped out under Tinubu – Falana', '<p><span>Human rights lawyer and Senior Advocate of Nigeria, Femi Falana, has criticised President Bola Tinubu’s economic reforms, warning that the administration’s “harsh neoliberal policies” have deepened poverty and effectively wiped out the country’s middle class.</span></p><p><span>Falana, speaking on Channels Television’s Politics Today on Monday, said the President’s policies, particularly the removal of fuel subsidies and currency liberalisation, have worsened the cost-of-living crisis for Nigerians.</span></p><p><span>He said, “I have seen the President ask APC governors to ‘wet the ground’ more, but as far as the masses of our people are concerned, things are getting tougher by the day because of the harsh economic crisis in the country, which the president recognise that Nigerians all over the country are complaining that things are getting tougher for them.</span></p><p><span>“Because of the religious implementation of neoliberal policies by the government, poverty is on the ascendancy. That will require a review of these policies.”</span></p><p><span>Falana condemned the government’s continued drive towards privatisation, stating it runs contrary to efforts to reduce income inequality.</span></p><p><span>He stated, “You cannot be addressing income inequality in a country while handing over the nation’s resources to a few people in the name of privatisation.</span></p><p><span>“Most Nigerians cannot afford three square meals a day. The middle class has been wiped out by the neoliberal policies of the government.</span></p><p><span>Related News</span></p><ul><li><a><span> VIDEO: Former Ogun Gov\'s Wife Hops on Popular Nicki Minaj Music Video Challenge</span></a></li><li><a><span> Katsina gov congratulates D’Tigress on AfroBasket victory</span></a></li><li><a><span> N\'Assembly to vote on special seats bill after recess – Deputy speaker</span></a></li></ul><p><span>He urged the government to “go back to the drawing board” and reconsider policies influenced by international financial institutions like the IMF and World Bank.</span></p><p><span>“It is in the interest of the government to review its policies as soon as possible,” he stated.</span></p><p><span>Falana also called for urgent legal backing for social welfare programmes to alleviate the current hardship, referencing the National Social Investment Programme, which was codified under the Social Investment Programme Agency Act in 2023.</span></p><p><span>“To eradicate poverty, we must begin by implementing welfare laws,” he said.</span></p><p><span>The NSIP includes schemes such as N-Power, Government Enterprise and Empowerment Programme, school feeding initiatives, and conditional cash transfers to vulnerable households.</span></p><p><span>“President Tinubu should be able to persuade the governors to codify social investment programmes and enact them into law,” he said.</span></p>', 'middle-class-has-been-wiped-out-under-tinubu-falana', 'http://localhost/watch-tower/app/uploads/posts/1754344119-913.jpg', 'user', 50, 'approved', 0, '2025-08-04 21:48:39', '2025-08-04 21:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `cate_id` int(11) NOT NULL,
  `reference` varchar(10) NOT NULL,
  `cate_name` varchar(100) NOT NULL,
  `cate_slug` varchar(100) NOT NULL,
  `cate_cost` double NOT NULL DEFAULT 35,
  `cate_free` double NOT NULL,
  `is_active` enum('true','false') NOT NULL DEFAULT 'true',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`cate_id`, `reference`, `cate_name`, `cate_slug`, `cate_cost`, `cate_free`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '436FE9J3AZ', 'AI', 'ai', 45, 15, 'true', '2024-11-07 21:29:55', '2025-07-14 20:39:22'),
(2, 'EU9YRAKK1U', 'Nature', 'nature', 15, 5, 'true', '2024-11-07 22:22:49', '2025-07-14 20:39:26'),
(3, 'MZ5HHKY22J', 'Plant', 'plant', 10, 3, 'true', '2024-11-07 22:22:49', '2025-07-14 20:39:30'),
(4, 'EYOZVWVYB7', 'Interior', 'interior', 25, 5, 'true', '2024-11-07 22:22:49', '2025-07-14 20:39:35'),
(5, 'F69TH0JAQ7', 'Portrait', 'portrait', 35, 3, 'true', '2024-11-07 22:22:49', '2025-07-14 20:39:38'),
(6, 'I5YV6AVWKS', 'Space', 'space', 35, 2, 'true', '2024-11-07 22:22:49', '2025-07-14 20:39:41'),
(7, 'DM326BAW4Z', 'Texture', 'texture', 15, 4, 'true', '2024-11-07 22:22:49', '2025-07-14 20:39:47'),
(14, '71O2Z6GDLE', 'gggg', 'sfgdfg', 24, 111, 'true', '2025-07-31 00:15:52', '2025-07-30 21:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `post_links`
--

CREATE TABLE `post_links` (
  `link_id` int(11) NOT NULL,
  `reference` varchar(20) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `link_index` int(11) NOT NULL,
  `link_cost` double NOT NULL,
  `link_url` varchar(255) NOT NULL,
  `link_anchor` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_meta`
--

CREATE TABLE `post_meta` (
  `meta_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `meta_title` varchar(120) NOT NULL,
  `meta_description` varchar(200) NOT NULL,
  `meta_keywords` varchar(150) NOT NULL,
  `meta_canonical` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_meta`
--

INSERT INTO `post_meta` (`meta_id`, `post_id`, `meta_title`, `meta_description`, `meta_keywords`, `meta_canonical`, `updated_at`) VALUES
(1, 1, 'Tinubu gives D’Tigress $100,000 each, flats, national honour', 'Tinubu gives D’Tigress $100,000 each, flats, national honour', 'Tinubu,D&#039;Tigress,$100,000,Flats,National Honor', '  ', '2025-08-04 21:26:51'),
(2, 2, 'Presidency faults Obi’s one-term promise, says Lincoln, JFK', 'Presidency faults Obi’s one-term promise, says Lincoln, JFK', 'Peter Obi,Presidency,Nigeria,One-term Promise,Lincoln,JFK', '  ', '2025-08-04 21:35:15'),
(3, 3, 'Step-by-step guide for checking 2025 WASSCE results', 'Step-by-step guide for checking 2025 WASSCE results', 'WASSCE,2025,RESULTS', '  ', '2025-08-04 21:38:23'),
(4, 4, '‘I went to a prison-like school,’ other Kemi Badenoch’s crit', '‘I went to a prison-like school,’ other Kemi Badenoch’s crit', 'Kemi Badenoch,Britain,Nigeria', '  ', '2025-08-04 21:42:42'),
(5, 5, '2027: Obi’s one-term Presidency gambit sparks political fire', '2027: Obi’s one-term Presidency gambit sparks political fire', 'Peter Obi,Presidency,One-term,Politics,Nigeria', '  ', '2025-08-04 21:46:14'),
(6, 6, 'Middle class has been wiped out under Tinubu – Falana', 'Middle class has been wiped out under Tinubu – Falana', 'Tinubu,Economic Crisis,Policues,Falana', '  ', '2025-08-04 21:48:39');

-- --------------------------------------------------------

--
-- Table structure for table `post_payment`
--

CREATE TABLE `post_payment` (
  `pay_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reference` varchar(20) NOT NULL,
  `pay_total` double NOT NULL,
  `pay_type` enum('post','insertion') NOT NULL DEFAULT 'post',
  `pay_links` text NOT NULL,
  `pay_status` enum('unpaid','paid','cancelled') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `reference` varchar(15) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `avatar` text NOT NULL,
  `join_via` enum('google','facebook') NOT NULL,
  `is_active` enum('true','false') NOT NULL DEFAULT 'true',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `reference`, `first_name`, `last_name`, `email`, `avatar`, `join_via`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '111304177786895', 'Oderinwale', 'Femi', 'oderinwalefemi150@gmail.com', 'https://lh3.googleusercontent.com/a/ACg8ocKdJ6LHyaY4uf125hqFVs6D_GLWBh-U7CQq5etdtIibIybmaT5u=s96-c', 'google', 'true', '2025-08-02 16:35:51', '2025-08-02 16:35:51'),
(2, '108756012026965', 'Oderinwale', 'Oluwafemi', 'oderinwalefm@gmail.com', 'https://lh3.googleusercontent.com/a/ACg8ocLdck-aS5wZh3rItY83t4IkYXTBX_5P4mBn0vyyy0NycAddMQ=s96-c', 'google', 'true', '2025-08-02 21:32:10', '2025-08-02 21:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `users_author`
--

CREATE TABLE `users_author` (
  `author_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `idx_post_unique` (`post_unique`) USING BTREE,
  ADD KEY `idx_user_cate` (`user_id`,`cate_id`),
  ADD KEY `idx_reference` (`reference`),
  ADD KEY `idx_post_title` (`post_title`),
  ADD KEY `idx_post_status` (`post_status`),
  ADD KEY `idx_created_at` (`created_at`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`cate_id`),
  ADD UNIQUE KEY `uniq_reference` (`reference`),
  ADD KEY `idx_cate_name` (`cate_name`),
  ADD KEY `idx_cate_slug` (`cate_slug`),
  ADD KEY `idx_is_active` (`is_active`),
  ADD KEY `idx_created_at` (`created_at`);

--
-- Indexes for table `post_links`
--
ALTER TABLE `post_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `idx_user_post` (`post_id`),
  ADD KEY `idx_reference` (`reference`),
  ADD KEY `idx_link_url` (`link_url`),
  ADD KEY `idx_created_at` (`created_at`);

--
-- Indexes for table `post_meta`
--
ALTER TABLE `post_meta`
  ADD PRIMARY KEY (`meta_id`),
  ADD UNIQUE KEY `post_id` (`post_id`);

--
-- Indexes for table `post_payment`
--
ALTER TABLE `post_payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `idx_user_post` (`post_id`),
  ADD KEY `idx_reference` (`reference`),
  ADD KEY `idx_pay_status` (`pay_status`),
  ADD KEY `idx_pay_type` (`pay_type`),
  ADD KEY `idx_created_at` (`created_at`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_author`
--
ALTER TABLE `users_author`
  ADD PRIMARY KEY (`author_id`),
  ADD KEY `idx_user_id` (`user_id`),
  ADD KEY `idx_name` (`name`),
  ADD KEY `idx_created_at` (`created_at`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `post_links`
--
ALTER TABLE `post_links`
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_meta`
--
ALTER TABLE `post_meta`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post_payment`
--
ALTER TABLE `post_payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_author`
--
ALTER TABLE `users_author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
