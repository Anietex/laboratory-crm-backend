-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 04:02 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laboratory`
--

-- --------------------------------------------------------

--
-- Table structure for table `chemical_pathologies`
--

CREATE TABLE `chemical_pathologies` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(11) NOT NULL,
  `lab_id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clinical_detail` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exam_required` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specimen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clinic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_cholesterol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `triglyceride` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hdlm` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vldl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eucr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creatinine` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urea` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sodium` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `potassium` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chloride` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bicarbonate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fsh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prolactin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `progesteron` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estradol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `psa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ast` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bilirubin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conj_bilirubin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_protein` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `albunim` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `globulin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `glucose` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rbs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fbs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hrs2ppbs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amylase` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gamma_glutamic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uric_acid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calcium` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inorganic_phos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tsh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appearance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ph` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protein` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ketone_bodies` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ur_bilirubin` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ascorbic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leucocytes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specific_gravity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ur_glucose` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urobilinogen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `crystals` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chemical_pathologies`
--

INSERT INTO `chemical_pathologies` (`id`, `patient_id`, `lab_id`, `requested_by`, `clinical_detail`, `exam_required`, `specimen`, `clinic`, `total_cholesterol`, `triglyceride`, `hdlm`, `vldl`, `ldl`, `eucr`, `creatinine`, `urea`, `sodium`, `potassium`, `chloride`, `bicarbonate`, `fsh`, `lh`, `prolactin`, `progesteron`, `estradol`, `psa`, `ast`, `alt`, `alp`, `bilirubin`, `conj_bilirubin`, `total_protein`, `albunim`, `globulin`, `glucose`, `rbs`, `fbs`, `hrs2ppbs`, `amylase`, `cpk`, `gamma_glutamic`, `uric_acid`, `calcium`, `inorganic_phos`, `tsh`, `appearance`, `ph`, `protein`, `ketone_bodies`, `ur_bilirubin`, `nitric`, `ascorbic`, `leucocytes`, `specific_gravity`, `ur_glucose`, `urobilinogen`, `blood`, `crystals`, `created_at`, `updated_at`) VALUES
(8, 2, '1', 'eee', 'errer', 'fbgfg', 'Urine', 'fgfg', '35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-24 08:18:27', '2018-09-24 10:07:07'),
(10, 4, '2', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '2018-10-15 12:19:38', '2018-10-15 12:19:38');

-- --------------------------------------------------------

--
-- Table structure for table `haematology_reports`
--

CREATE TABLE `haematology_reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(11) NOT NULL,
  `requested_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `exam_required` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `specimen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `clinic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `hb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `pcv` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `rbc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `mcv` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `mch` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `mchc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `wbc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `platelets` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `retics` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `esr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `nuet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `lymp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `mono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `eosino` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `baso` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `blast` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `promvelo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `myelo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `matemye` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `band` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `normod` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `bleeding_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `clotting_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `prothrobin_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `partial_prothrobin_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `hb_genotype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `cross_matching` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `film_report` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `lab_scientist` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `screening` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `quantitative` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lab_id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clinical_detail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `haematology_reports`
--

INSERT INTO `haematology_reports` (`id`, `patient_id`, `requested_by`, `exam_required`, `specimen`, `clinic`, `hb`, `pcv`, `rbc`, `mcv`, `mch`, `mchc`, `wbc`, `platelets`, `retics`, `esr`, `nuet`, `lymp`, `mono`, `eosino`, `baso`, `blast`, `promvelo`, `myelo`, `matemye`, `band`, `normod`, `bleeding_time`, `clotting_time`, `prothrobin_time`, `partial_prothrobin_time`, `blood_group`, `hb_genotype`, `cross_matching`, `film_report`, `lab_scientist`, `screening`, `quantitative`, `created_at`, `updated_at`, `lab_id`, `clinical_detail`) VALUES
(9, 2, 'Bassey Bassey', 'exams', 'specimen', 'clinic', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-21 11:25:24', '2018-09-21 11:25:24', '1', 'clinic'),
(12, 2, 'Bassey Bassey', 'examination', 'specimen', 'clinic', '34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-24 09:28:34', '2018-09-24 10:05:34', '1', 'clinic'),
(13, 2, '1', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '2018-10-15 12:02:29', '2018-10-15 12:02:29', '2', '2'),
(24, 3, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-15 14:56:06', '2018-10-15 14:56:06', '2', 'null'),
(28, 3, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-15 15:12:32', '2018-10-15 15:12:32', '2', 'null'),
(29, 5, 'bmvgvm', ',jjnjkjjkkj', 'gmgvhv', 'vjvjv', 'vhvj', 'vjv', 'vjvjv', 'vjjv', 'jvj', 'vjv', 'vjv', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-16 08:50:35', '2018-10-16 08:50:35', '2', 'vjvjvj');

-- --------------------------------------------------------

--
-- Table structure for table `laboratories`
--

CREATE TABLE `laboratories` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lab_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laboratories`
--

INSERT INTO `laboratories` (`id`, `username`, `password`, `location`, `lab_name`, `admin`, `created_at`, `updated_at`) VALUES
(1, 'User4', '$2y$10$BO23Y.hBPZ/Zsadw7KspzeC3rdkJJ7V7lGdSD8eIRCS0TgDHPWCGu', 'Aka road', 'Lab1', 0, '2018-10-11 09:27:21', '2018-10-16 08:15:39'),
(2, 'Admin', '$2y$10$9Cy5VIAmkOYuX91qMFDDtekFF84fJxPjKfSQfwv/m6loUp8FX0VgS', 'Abak Road', 'Main Lab', 1, '2018-10-11 09:33:13', '2018-10-12 09:31:27'),
(4, 'Admin2', '$2y$10$FNC/8naT9DKks3ZwG06GCucPdrudPLe6RrHsgWtf9arfLNkfckbvq', 'Oron road', 'Lab5', 0, '2018-10-11 10:29:25', '2018-10-12 14:02:30');

-- --------------------------------------------------------

--
-- Table structure for table `medical_microbiologies`
--

CREATE TABLE `medical_microbiologies` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(11) NOT NULL,
  `requested_by` text COLLATE utf8mb4_unicode_ci,
  `exam_required` text COLLATE utf8mb4_unicode_ci,
  `specimen` text COLLATE utf8mb4_unicode_ci,
  `clinic` text COLLATE utf8mb4_unicode_ci,
  `macroscopy` text COLLATE utf8mb4_unicode_ci,
  `cell_count` text COLLATE utf8mb4_unicode_ci,
  `differential_wbc` text COLLATE utf8mb4_unicode_ci,
  `pus_cell` text COLLATE utf8mb4_unicode_ci,
  `rbc` text COLLATE utf8mb4_unicode_ci,
  `epithelial_cell` text COLLATE utf8mb4_unicode_ci,
  `gram_pus_cell` text COLLATE utf8mb4_unicode_ci,
  `gve_ccoci_pos` text COLLATE utf8mb4_unicode_ci,
  `gve_rods_pos` text COLLATE utf8mb4_unicode_ci,
  `gve_ccoci_neg` text COLLATE utf8mb4_unicode_ci,
  `gve_rods_neg` text COLLATE utf8mb4_unicode_ci,
  `gram_epithelial_cell` text COLLATE utf8mb4_unicode_ci,
  `zn_stain_pus_cell` text COLLATE utf8mb4_unicode_ci,
  `zn_stain_afb_x1` text COLLATE utf8mb4_unicode_ci,
  `zn_stain_afb_x2` text COLLATE utf8mb4_unicode_ci,
  `zn_stain_afb_x3` text COLLATE utf8mb4_unicode_ci,
  `test_time` text COLLATE utf8mb4_unicode_ci,
  `abstinence` text COLLATE utf8mb4_unicode_ci,
  `volume` text COLLATE utf8mb4_unicode_ci,
  `colour` text COLLATE utf8mb4_unicode_ci,
  `liquefaction` text COLLATE utf8mb4_unicode_ci,
  `viscosity` text COLLATE utf8mb4_unicode_ci,
  `ph` text COLLATE utf8mb4_unicode_ci,
  `viability` text COLLATE utf8mb4_unicode_ci,
  `motility_active` text COLLATE utf8mb4_unicode_ci,
  `motility_sluggish` text COLLATE utf8mb4_unicode_ci,
  `motility_non_motile` text COLLATE utf8mb4_unicode_ci,
  `count` text COLLATE utf8mb4_unicode_ci,
  `hpf_pus_cell` text COLLATE utf8mb4_unicode_ci,
  `morph_pus_cell` text COLLATE utf8mb4_unicode_ci,
  `hpf_rbc` text COLLATE utf8mb4_unicode_ci,
  `morph_rbc` text COLLATE utf8mb4_unicode_ci,
  `hpf_epithelial_cell` text COLLATE utf8mb4_unicode_ci,
  `morph_epithelial_cell` text COLLATE utf8mb4_unicode_ci,
  `stool_macroscopy` text COLLATE utf8mb4_unicode_ci,
  `wet_preparation` text COLLATE utf8mb4_unicode_ci,
  `concentration` text COLLATE utf8mb4_unicode_ci,
  `malaria_parasite` text COLLATE utf8mb4_unicode_ci,
  `microfilaria_skin` text COLLATE utf8mb4_unicode_ci,
  `microfilaria_blood` text COLLATE utf8mb4_unicode_ci,
  `stool_occult_blood` text COLLATE utf8mb4_unicode_ci,
  `vdrl_test` text COLLATE utf8mb4_unicode_ci,
  `aso_titre` text COLLATE utf8mb4_unicode_ci,
  `chlamydia_serology` text COLLATE utf8mb4_unicode_ci,
  `hepbag` text COLLATE utf8mb4_unicode_ci,
  `hcv_ab` text COLLATE utf8mb4_unicode_ci,
  `helicobacter` text COLLATE utf8mb4_unicode_ci,
  `retroviral_screening` text COLLATE utf8mb4_unicode_ci,
  `cd4_count` text COLLATE utf8mb4_unicode_ci,
  `given` text COLLATE utf8mb4_unicode_ci,
  `read` text COLLATE utf8mb4_unicode_ci,
  `result` text COLLATE utf8mb4_unicode_ci,
  `s_typhi_o` text COLLATE utf8mb4_unicode_ci,
  `s_typhi_h` text COLLATE utf8mb4_unicode_ci,
  `s_paratyphi_a_o` text COLLATE utf8mb4_unicode_ci,
  `s_paratyphi_a_h` text COLLATE utf8mb4_unicode_ci,
  `s_paratyphi_b_o` text COLLATE utf8mb4_unicode_ci,
  `s_paratyphi_b_h` text COLLATE utf8mb4_unicode_ci,
  `s_paratyphi_c_o` text COLLATE utf8mb4_unicode_ci,
  `s_paratyphi_c_h` text COLLATE utf8mb4_unicode_ci,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `amoxycillin` text COLLATE utf8mb4_unicode_ci,
  `cefuroxime` text COLLATE utf8mb4_unicode_ci,
  `ceftriaxone` text COLLATE utf8mb4_unicode_ci,
  `ceftazidime` text COLLATE utf8mb4_unicode_ci,
  `cotrimoxazole` text COLLATE utf8mb4_unicode_ci,
  `norfloxacin` text COLLATE utf8mb4_unicode_ci,
  `tebacylin` text COLLATE utf8mb4_unicode_ci,
  `nalidixic_acid` text COLLATE utf8mb4_unicode_ci,
  `streptomacycin` text COLLATE utf8mb4_unicode_ci,
  `septrin` text COLLATE utf8mb4_unicode_ci,
  `ciprofloxin` text COLLATE utf8mb4_unicode_ci,
  `chloramphenicol` text COLLATE utf8mb4_unicode_ci,
  `erythromycin` text COLLATE utf8mb4_unicode_ci,
  `gentymacin` text COLLATE utf8mb4_unicode_ci,
  `ofloxacin` text COLLATE utf8mb4_unicode_ci,
  `nitrofuratoin` text COLLATE utf8mb4_unicode_ci,
  `ampiclox` text COLLATE utf8mb4_unicode_ci,
  `amoxycilin` text COLLATE utf8mb4_unicode_ci,
  `clindamycin` text COLLATE utf8mb4_unicode_ci,
  `levofloxcin` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lab_id` int(5) NOT NULL,
  `clinical_detail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `antibiotic_therapy` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `retroviral_confirmation` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organism_isolated` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_microbiologies`
--

INSERT INTO `medical_microbiologies` (`id`, `patient_id`, `requested_by`, `exam_required`, `specimen`, `clinic`, `macroscopy`, `cell_count`, `differential_wbc`, `pus_cell`, `rbc`, `epithelial_cell`, `gram_pus_cell`, `gve_ccoci_pos`, `gve_rods_pos`, `gve_ccoci_neg`, `gve_rods_neg`, `gram_epithelial_cell`, `zn_stain_pus_cell`, `zn_stain_afb_x1`, `zn_stain_afb_x2`, `zn_stain_afb_x3`, `test_time`, `abstinence`, `volume`, `colour`, `liquefaction`, `viscosity`, `ph`, `viability`, `motility_active`, `motility_sluggish`, `motility_non_motile`, `count`, `hpf_pus_cell`, `morph_pus_cell`, `hpf_rbc`, `morph_rbc`, `hpf_epithelial_cell`, `morph_epithelial_cell`, `stool_macroscopy`, `wet_preparation`, `concentration`, `malaria_parasite`, `microfilaria_skin`, `microfilaria_blood`, `stool_occult_blood`, `vdrl_test`, `aso_titre`, `chlamydia_serology`, `hepbag`, `hcv_ab`, `helicobacter`, `retroviral_screening`, `cd4_count`, `given`, `read`, `result`, `s_typhi_o`, `s_typhi_h`, `s_paratyphi_a_o`, `s_paratyphi_a_h`, `s_paratyphi_b_o`, `s_paratyphi_b_h`, `s_paratyphi_c_o`, `s_paratyphi_c_h`, `comment`, `amoxycillin`, `cefuroxime`, `ceftriaxone`, `ceftazidime`, `cotrimoxazole`, `norfloxacin`, `tebacylin`, `nalidixic_acid`, `streptomacycin`, `septrin`, `ciprofloxin`, `chloramphenicol`, `erythromycin`, `gentymacin`, `ofloxacin`, `nitrofuratoin`, `ampiclox`, `amoxycilin`, `clindamycin`, `levofloxcin`, `created_at`, `updated_at`, `lab_id`, `clinical_detail`, `antibiotic_therapy`, `retroviral_confirmation`, `organism_isolated`) VALUES
(7, 2, 'George James', 'ask her', 'unknown', 'clinic', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ppp', NULL, NULL, NULL, NULL, NULL, NULL, 'ppp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ppp', 'r', '2018-09-24 11:32:32', '2018-10-10 10:45:32', 1, 'i don\'t know', NULL, NULL, 'Organism'),
(8, 2, '1', '3', '4', '5', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '500', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '55', '56', '57', '58', '59', '63', '60', '64', '61', '65', '62', '66', '67', 'ppp', 'ppp', 'ppp', 'ppp', 'ppp', 'ppp', 'ppp', 'ppp', 'ppp', 'ppp', 'ppp', 'ppp', 'ppp', 'ppp', 'ppp', 'ppp', 'ppp', 'ppp', 'ppp', 'ppp', '2018-10-15 12:26:25', '2018-10-16 06:56:05', 2, '2', '6', '54', '68'),
(9, 4, 'null', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-15 14:18:28', '2018-10-15 14:18:28', 2, 'null', NULL, NULL, 'null'),
(10, 4, 'null', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-15 14:19:04', '2018-10-15 14:19:04', 2, 'null', NULL, NULL, 'null'),
(11, 4, 'null', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-15 14:21:39', '2018-10-15 14:21:39', 2, 'null', NULL, NULL, 'null');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_10_083150_create_haematology_reports_table', 1),
(5, '2018_09_12_150126_create_chemical_pathologies_table', 2),
(6, '2018_09_14_102729_create_medical_microbiologies_table', 3),
(7, '2018_09_17_123049_create_radiological_requests_table', 4),
(8, '2018_09_20_131908_create_patients_table', 5),
(9, '2018_10_11_084528_create_laboratories_table', 6),
(10, '2018_10_11_152758_create_settings_table', 7),
(11, '2016_06_01_000001_create_oauth_auth_codes_table', 8),
(12, '2016_06_01_000002_create_oauth_access_tokens_table', 8),
(13, '2016_06_01_000003_create_oauth_refresh_tokens_table', 8),
(14, '2016_06_01_000004_create_oauth_clients_table', 8),
(15, '2016_06_01_000005_create_oauth_personal_access_clients_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('0e05f120bec512c4aadd582a4f6da6e4d88b86a0e5667b9e88b8f6ec4b732d099d929ea2bbb4229f', 2, 1, 'lab_token', '[]', 1, '2018-10-16 08:43:10', '2018-10-16 08:43:10', '2019-10-16 09:43:10'),
('12393eca0fbd7dbfeae8ba6678545d25156fb3a63329c2ed0dfa91fe3805f4c423c38586b52c5f4c', 4, 1, 'lab_token', '[]', 1, '2018-10-16 08:58:01', '2018-10-16 08:58:01', '2019-10-16 09:58:01'),
('170174ccc0588edf43514417854bf2f59a389bcb0e37f5f79ae6c7d226115e5274ef76d79e779036', 1, 1, 'lab_token', '[]', 1, '2018-10-16 08:16:01', '2018-10-16 08:16:01', '2019-10-16 09:16:01'),
('23241249719b33b30d0345871f10e560a234515eecf8cb002b4e190dd823e2f17e6dca0fdaa2c6f1', 4, 1, 'lab_token', '[]', 1, '2018-10-16 08:19:49', '2018-10-16 08:19:49', '2019-10-16 09:19:49'),
('2b93e612530b212cc556aa486ca75d6f1ded4b2a4f04206da260528b132f362baab705f0ebf9827e', 2, 1, 'lab_token', '[]', 1, '2018-10-16 08:26:41', '2018-10-16 08:26:41', '2019-10-16 09:26:41'),
('2bfb1f6dc0d1cc92f0be3600912508d44bf25c7eb0732f2fd97d7660d44459efc30844d590220fc7', 4, 1, 'lab_token', '[]', 1, '2018-10-16 08:43:29', '2018-10-16 08:43:29', '2019-10-16 09:43:29'),
('2fffdba939bdcdd99bf5742492fbf811d9f9b541464dced10f33966de380915c9758f676c9b82474', 2, 1, 'lab_token', '[]', 1, '2018-10-16 08:57:49', '2018-10-16 08:57:49', '2019-10-16 09:57:49'),
('3056f90f2056f81f7ae9dbbfc5dcc1c803620274f4e26726efba9061b417ceb3242e7e7252c32013', 2, 1, 'lab_token', '[]', 1, '2018-10-16 08:39:26', '2018-10-16 08:39:26', '2019-10-16 09:39:26'),
('30781a2f460b9796f97f88eed94912ddbc4a663075ba2bba8b9703e6e07805df1daaf2d15cd7ffb7', 2, 1, 'lab_token', '[]', 1, '2018-10-12 13:09:37', '2018-10-12 13:09:37', '2019-10-12 14:09:37'),
('3be2f89cfde77b5c71061d532d2612e27974db5e0c679b05847c78d90b1753d7243bcd495ee44108', 2, 1, 'lab_token', '[]', 1, '2018-10-16 10:21:02', '2018-10-16 10:21:02', '2019-10-16 11:21:02'),
('3da78e42e6439a619a5a372b2dab4f6ffa3a62ab40dc10e939f0becd9921d3f8b97e6a6956a7af86', 2, 1, 'lab_token', '[]', 1, '2018-10-16 08:15:12', '2018-10-16 08:15:12', '2019-10-16 09:15:12'),
('475dd18f36c099c99d179d26168523ebf3e0ec8880cde66e18810995f347a912776b3cd8115eb05d', 4, 1, 'lab_token', '[]', 1, '2018-10-12 15:31:04', '2018-10-12 15:31:04', '2019-10-12 16:31:04'),
('4905682a40811871923ad3c62284b03073d1037e9dc6b63e3eab99efb24c3c6bff4e59ddd755134c', 2, 1, 'lab_token', '[]', 1, '2018-10-15 06:11:46', '2018-10-15 06:11:46', '2019-10-15 07:11:46'),
('4b6679c22bb174e9153ebfb6843aa0d8b73f9cf7e8654dc5c1edd483fa3299fe6093f17efc21067d', 4, 1, 'lab_token', '[]', 1, '2018-10-16 08:22:15', '2018-10-16 08:22:15', '2019-10-16 09:22:15'),
('4c5c0285ce99150a42c840fedfb1f0f593dc8a729a82e63193af9de0528f32112da700a1ad2b6849', 4, 1, 'lab_token', '[]', 1, '2018-10-16 08:46:06', '2018-10-16 08:46:06', '2019-10-16 09:46:06'),
('50f75e62ee8759597573ffdb726fe4dfb037bbb70c1a9a2e55db9f117ab31ba42e3881f804bcec68', 2, 1, 'lab_token', '[]', 1, '2018-10-16 10:48:02', '2018-10-16 10:48:02', '2019-10-16 11:48:02'),
('5397d4a8953abc038b708d30fe57cee8b05f077b50958f3322f235f071fe821c69bd76fa855a8e3a', 2, 1, 'lab_token', '[]', 1, '2018-10-16 10:33:19', '2018-10-16 10:33:19', '2019-10-16 11:33:19'),
('5e30d5d78e24ced785e7d291fbc34728c34a8be0d4338d14c4a713e26fa56b9d292f436bcc4e03fb', 2, 1, 'lab_token', '[]', 1, '2018-10-12 13:14:47', '2018-10-12 13:14:47', '2019-10-12 14:14:47'),
('61cb9b8230af076458c9aa256df562d76cf079dfbec4f7cc16caee878f91d931aff2198c4f96d1fa', 2, 1, 'lab_token', '[]', 1, '2018-10-16 08:26:04', '2018-10-16 08:26:04', '2019-10-16 09:26:04'),
('696468bf5ed6f629424df1cf855f266dbb6bf2147626a7902d7641879bb2b0863d7f0fa1b1e69bd8', 2, 1, 'lab_token', '[]', 1, '2018-10-16 08:34:44', '2018-10-16 08:34:44', '2019-10-16 09:34:44'),
('6a109e84eaf086aaa651f945932152d4cfaac9e4087a27c8933416c4cc1dba12aa5d896f0e29c5f7', 4, 1, 'lab_token', '[]', 1, '2018-10-12 15:04:35', '2018-10-12 15:04:35', '2019-10-12 16:04:35'),
('6e6c7b795e1211d05730e32d04bb337b10400f12f156e7fdf4b8881fd00957c658c86ca9b8da0747', 2, 1, 'lab_token', '[]', 0, '2018-10-16 12:59:21', '2018-10-16 12:59:21', '2019-10-16 13:59:21'),
('6f0a7520fbe008d27c3eeecd63c422494e67956958edfbaf9d1c2f673012fcee0ba91ecfc865e455', 2, 1, 'lab_token', '[]', 1, '2018-10-16 08:47:14', '2018-10-16 08:47:14', '2019-10-16 09:47:14'),
('6fa8cd7134c9ffabe3b3daf98fa1cc4213849d97dfaca6e1780764bed071b148a44480011eb1b20b', 2, 1, 'lab_token', '[]', 1, '2018-10-16 10:28:16', '2018-10-16 10:28:16', '2019-10-16 11:28:16'),
('70b8c94aabd276ea17b176dcf6da90c57cd6e7256a95d0d157f074e65711ba9a1d815b83f7207915', 2, 1, 'lab_token', '[]', 1, '2018-10-12 10:23:34', '2018-10-12 10:23:34', '2019-10-12 11:23:34'),
('714fa42e0d7ee78288a31b9d76eabc8693f32949f2a64dcb1e20e1a37893dcfbca6e14d8d0d886ab', 2, 1, 'lab_token', '[]', 1, '2018-10-16 09:16:25', '2018-10-16 09:16:25', '2019-10-16 10:16:25'),
('7bf95d9a9209feb7c1b527ab4dedbbac6573abc0cd6ef5f23edab6241f1d5074efb1f2f8684ad7ce', 4, 1, 'lab_token', '[]', 1, '2018-10-12 14:03:25', '2018-10-12 14:03:25', '2019-10-12 15:03:25'),
('848ba50ea741ce1bda47d6cadc460fb41e0a233a0952442c664fce6c28bf6c070b2d7078d0666204', 2, 1, 'lab_token', '[]', 1, '2018-10-16 09:12:39', '2018-10-16 09:12:39', '2019-10-16 10:12:39'),
('8c93ae353200bf817b0f399efad9cbeb224828e439cff0fda83c75d4a295dd490c0c2ec195b18dd8', 2, 1, 'lab_token', '[]', 1, '2018-10-16 10:46:40', '2018-10-16 10:46:40', '2019-10-16 11:46:40'),
('8f6af2a9a07207f049612bd8a522afeb99baa59926c155c505bd345f9f2f651db4be062e689d5444', 2, 1, 'lab_token', '[]', 1, '2018-10-12 13:51:06', '2018-10-12 13:51:06', '2019-10-12 14:51:06'),
('91458f33e85f349cb849a4ce49527cbcf5ddef7a42f4436958f3efd54e68a86a489e1a653b0c1c83', 4, 1, 'lab_token', '[]', 1, '2018-10-16 08:28:07', '2018-10-16 08:28:07', '2019-10-16 09:28:07'),
('9197e96458a586c44d8af6fcaf388a4d3d53c83610f9b37a5e56770bd5be21b24f238235e3de5f6a', 2, 1, 'lab_token', '[]', 1, '2018-10-16 08:29:44', '2018-10-16 08:29:44', '2019-10-16 09:29:44'),
('91cae65d333b8c0092c9b0526ee633c43b3df4687f765f6aa9c650d1cbec4dc9abf0b34757b440ab', 2, 1, 'lab_token', '[]', 1, '2018-10-12 13:11:31', '2018-10-12 13:11:31', '2019-10-12 14:11:31'),
('9354d14c42c3ead98062f94fb20e8d0d3a2136b91b11ab9137d0182e92a774165a80509c0b6588da', 2, 1, 'lab_token', '[]', 1, '2018-10-16 08:30:42', '2018-10-16 08:30:42', '2019-10-16 09:30:42'),
('9441e5935bddac7b16271d7db61ce73e308faa3e748ca7927e273cfd635cf63a307e93bc67c5593b', 2, 1, 'lab_token', '[]', 1, '2018-10-16 08:33:51', '2018-10-16 08:33:51', '2019-10-16 09:33:51'),
('9a6d6b43b3b1b8f8235f4909ff75e39bbe2fc7a9ce3fa8e41269ea6d08a67c7f3eb0527a85266bb2', 2, 1, 'lab_token', '[]', 1, '2018-10-12 11:50:40', '2018-10-12 11:50:40', '2019-10-12 12:50:40'),
('a93692c96dd30676639375a95851f85d27cbb424b1b6c508c85d969c4e5fd241fc59ea8f3f006e33', 2, 1, 'lab_token', '[]', 1, '2018-10-12 12:01:55', '2018-10-12 12:01:55', '2019-10-12 13:01:55'),
('aa0bfa83aa6418ef9412d7ab0df3ac79ed06b6bd33942279b7cf48950a995d98040732ef89a4572c', 2, 1, 'lab_token', '[]', 1, '2018-10-16 10:53:08', '2018-10-16 10:53:08', '2019-10-16 11:53:08'),
('b721d12c6b597af6fd48463c543828e4baf1a9d81e19ab315912c2dd178c2b1c987c7de116a024de', 2, 1, 'lab_token', '[]', 1, '2018-10-12 13:35:32', '2018-10-12 13:35:32', '2019-10-12 14:35:32'),
('bd2cf48e88e2e01045c65e915ccb2d214d748b25de98310ca02442f6e7314532508ae4b6fb6d8907', 2, 1, 'lab_token', '[]', 1, '2018-10-16 08:33:09', '2018-10-16 08:33:09', '2019-10-16 09:33:09'),
('c36424c3a1b2c5fb429f661e0638d57fd4a93837bbd71b6b27f8d9c955f71d987cfac78502fb2774', 4, 1, 'lab_token', '[]', 1, '2018-10-16 08:26:54', '2018-10-16 08:26:54', '2019-10-16 09:26:54'),
('c78302b49874b6f862b993af9ee010bcc98033b7de253e1a2e63652c5f134492c35fa3b0e7d08102', 2, 1, 'lab_token', '[]', 1, '2018-10-12 10:23:10', '2018-10-12 10:23:10', '2019-10-12 11:23:10'),
('c7fef0cf06354a8817c078aa9a026c45c1f94bc960fb73021e99e4a01a90edc4b62f02740e626c6d', 2, 1, 'lab_token', '[]', 1, '2018-10-12 10:29:21', '2018-10-12 10:29:21', '2019-10-12 11:29:21'),
('cbb0a986f795f5f6f0cfdf87cd07406fa3bfc016f02972317dda31831762520f89154423d06a4ad9', 4, 1, 'lab_token', '[]', 1, '2018-10-15 06:09:46', '2018-10-15 06:09:46', '2019-10-15 07:09:46'),
('d2ae962fb025878f67d0f48e219e18f981412e0abf8d5f6e5a09e648a2175c3232775beac007ebfa', 2, 1, 'lab_token', '[]', 1, '2018-10-12 11:23:26', '2018-10-12 11:23:26', '2019-10-12 12:23:26'),
('d875a8568b0a11866ef657df42aa9f8f06253b11bc302d4b4b689e858d914f6036019033709e4066', 2, 1, 'lab_token', '[]', 1, '2018-10-16 08:42:48', '2018-10-16 08:42:48', '2019-10-16 09:42:48'),
('dcea0dc4fd0a011b92a089b97662d8a68eaf3beab3db9f512312e1df6b2d25ab9f682f3e6ef037c9', 2, 1, 'lab_token', '[]', 1, '2018-10-12 11:22:39', '2018-10-12 11:22:39', '2019-10-12 12:22:39'),
('e921e8fb2b940a398d2dd71b2ec98a5b69ff1250d408eb8c2d394889db37da9a0d8d3f1687ac0137', 2, 1, 'lab_token', '[]', 1, '2018-10-16 08:21:33', '2018-10-16 08:21:33', '2019-10-16 09:21:33'),
('f2c22d81fc241f91a07c875a9144f68cb28eb5c69646aa541f0e9175a72bc21e1e764ab142a9c3aa', 2, 1, 'lab_token', '[]', 1, '2018-10-12 12:24:13', '2018-10-12 12:24:13', '2019-10-12 13:24:13'),
('f8bb72171a22036de1cff98af647ede70b8d176af3dd7fd5bd201a72713e6f74053b2c24c70d56bb', 4, 1, 'lab_token', '[]', 1, '2018-10-16 09:16:08', '2018-10-16 09:16:08', '2019-10-16 10:16:08');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Streamtrust Personal Access Client', 'czgcEs6efhjBrjzQWuhcs67priMjhnHy65xkTM93', 'http://localhost', 1, 0, 0, '2018-10-12 08:30:23', '2018-10-12 08:30:23'),
(2, NULL, 'Streamtrust Password Grant Client', 'QFqD2FobfBuFElcOAMCchVRWS0BDnCYqR9yWT3Xy', 'http://localhost', 0, 1, 0, '2018-10-12 08:30:23', '2018-10-12 08:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-10-12 08:30:23', '2018-10-12 08:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(10) UNSIGNED NOT NULL,
  `lab_id` int(11) NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clinical_detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exam_required` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specimen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clinic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `lab_id`, `surname`, `first_name`, `middle_name`, `age`, `sex`, `email`, `phone_no`, `requested_by`, `clinical_detail`, `exam_required`, `specimen`, `clinic`, `created_at`, `updated_at`) VALUES
(2, 1, 'Bassey', 'Joshua', 'Doe', '34', 'Male', 'anietex@gmail.com', '0809123489', 'John', 'Details', 'required', 'spec', 'cliniic', '2018-09-21 06:45:06', '2018-10-10 12:03:55'),
(3, 1, 'Frank', 'Kate', 'John', '34', 'Female', 'anietex@gmail.com', '07083415382', 'Aniefon', NULL, NULL, NULL, NULL, '2018-10-15 09:42:20', '2018-10-15 09:42:20'),
(4, 1, 'Queen', 'Tia', 'Oliver', '19', 'Female', 'anietex@gmail.com', '07083415382', NULL, NULL, NULL, NULL, NULL, '2018-10-15 09:46:41', '2018-10-15 09:46:41'),
(5, 1, 'Kin', 'Elizabeth', 'Ramon', '56', 'Female', 'anietex@gmail.com', '07083415382', NULL, NULL, NULL, NULL, NULL, '2018-10-16 07:08:02', '2018-10-16 07:08:02');

-- --------------------------------------------------------

--
-- Table structure for table `radiological_requests`
--

CREATE TABLE `radiological_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lmp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `investigations` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `radiological_requests`
--

INSERT INTO `radiological_requests` (`id`, `surname`, `first_name`, `middle_name`, `sex`, `age`, `lmp`, `phone_no`, `address`, `occupation`, `investigations`, `created_at`, `updated_at`) VALUES
(2, 'Umanah', 'Aniefon', 'Brendan', 'Female', '45', 'testing', '08097575775', 'teesting', 'testing', '[{\"name\":\"Soft Tissue Neck\",\"options\":[]},{\"name\":\"Shoulder join\",\"options\":[{\"value\":\"RT\",\"selected\":true},{\"value\":\"LT\",\"selected\":false},{\"value\":\"Int. Rot.\",\"selected\":true},{\"value\":\"Ext. Rot.\",\"selected\":true},{\"value\":\"Lat Oblique \\\"Y\\\"\",\"selected\":true}]},{\"name\":\"Sinuses\",\"options\":[{\"value\":\"OF\",\"selected\":false},{\"value\":\"Lat\",\"selected\":true},{\"value\":\"OM\",\"selected\":false}]},{\"name\":\"Temporamandibular (TMJ)\",\"options\":[{\"value\":\"RT\",\"selected\":false},{\"value\":\"LT\",\"selected\":false},{\"value\":\"Open\",\"selected\":true},{\"value\":\"Close\",\"selected\":false},{\"value\":\"Towne\'s\",\"selected\":false}]}]', '2018-09-17 14:09:07', '2018-09-17 14:09:07'),
(3, 'Doe', 'Jane', 'Doe', 'Female', '34', 'testing', '0984774646', 'testing ', 'test work', '[{\"name\":\"Pap smear\",\"options\":[]},{\"name\":\"Mammography\",\"options\":[]},{\"name\":\"Chest\",\"options\":[{\"value\":\"PA\",\"selected\":false},{\"value\":\"Lat\",\"selected\":false},{\"value\":\"Apical view\",\"selected\":true}]},{\"name\":\"Sinuses\",\"options\":[{\"value\":\"OF\",\"selected\":true},{\"value\":\"Lat\",\"selected\":false},{\"value\":\"OM\",\"selected\":false}]}]', '2018-09-17 14:53:50', '2018-09-17 14:53:50'),
(4, 'Doe', 'John', 'Doe', 'Male', '34', 'Test', '080848474', 'Testing', 'testing', '[{\"name\":\"Pap smear\",\"options\":[]},{\"name\":\"Mammography\",\"options\":[]},{\"name\":\"Chest\",\"options\":[{\"value\":\"PA\",\"selected\":true},{\"value\":\"Lat\",\"selected\":false},{\"value\":\"Apical view\",\"selected\":true}]},{\"name\":\"Soft Tissue Neck\",\"options\":[]}]', '2018-09-17 14:55:38', '2018-09-17 14:55:38'),
(5, 'Olamide', 'Funke', 'Opemi', 'Female', '45', 'a test', '09848484949', 'test again', '56', '[{\"name\":\"Mammography\",\"options\":[]},{\"name\":\"Chest\",\"options\":[{\"value\":\"PA\",\"selected\":true},{\"value\":\"Lat\",\"selected\":false},{\"value\":\"Apical view\",\"selected\":false}]},{\"name\":\"Shoulder join\",\"options\":[{\"value\":\"RT\",\"selected\":true},{\"value\":\"LT\",\"selected\":false},{\"value\":\"Int. Rot.\",\"selected\":false},{\"value\":\"Ext. Rot.\",\"selected\":false},{\"value\":\"Lat Oblique \\\"Y\\\"\",\"selected\":false}]},{\"name\":\"Cervical Spin\",\"options\":[]},{\"name\":\"Skull\",\"options\":[{\"value\":\"OF\",\"selected\":true},{\"value\":\"Lat\",\"selected\":false},{\"value\":\"Towne\'s\",\"selected\":false},{\"value\":\"Reverse Towne\'s\",\"selected\":false},{\"value\":\"SMV\",\"selected\":false}]},{\"name\":\"Clavicle\",\"options\":[]}]', '2018-09-17 14:58:13', '2018-09-19 10:53:06');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `logo_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `after_save_action` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo_file`, `lab_name`, `sub_name`, `after_save_action`, `phone_no`, `email`, `address`) VALUES
(1, 'logo.jpg', 'Springlight', 'Laboratories', '5', '07083415382', 'springlabs@admin.com', 'Plot 8 G/Line, Evet Housing Estate Uyo, Akwa Ibom State, Nigeria');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chemical_pathologies`
--
ALTER TABLE `chemical_pathologies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `haematology_reports`
--
ALTER TABLE `haematology_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laboratories`
--
ALTER TABLE `laboratories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_microbiologies`
--
ALTER TABLE `medical_microbiologies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radiological_requests`
--
ALTER TABLE `radiological_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chemical_pathologies`
--
ALTER TABLE `chemical_pathologies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `haematology_reports`
--
ALTER TABLE `haematology_reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `laboratories`
--
ALTER TABLE `laboratories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medical_microbiologies`
--
ALTER TABLE `medical_microbiologies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `radiological_requests`
--
ALTER TABLE `radiological_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
