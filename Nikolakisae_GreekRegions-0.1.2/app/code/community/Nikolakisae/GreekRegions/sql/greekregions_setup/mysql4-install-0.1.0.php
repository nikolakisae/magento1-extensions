<?php
/**
 * Greek Regions - Greek Regions Module
 *
 * @title      Magento -> Greek Regions (Greek)
 * @category   Languages / Locales
 * @package    Nikolakisae_GreekRegions
 * @author     Niko K
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

$installer = $this;
$installer->startSetup();
$installer->run("


INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'AI', 'Αιτωλοακαρνανίας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Aetolia-Acarnania'), ('el_GR', LAST_INSERT_ID(), 'Αιτωλοακαρνανίας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'ARG', 'Αργολίδας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Argolis'), ('el_GR', LAST_INSERT_ID(), 'Αργολίδας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'ARK', 'Αρκαδίας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Arcadia'), ('el_GR', LAST_INSERT_ID(), 'Αρκαδίας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'AR', 'Άρτας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Arta'), ('el_GR', LAST_INSERT_ID(), 'Άρτας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'AT', 'Αττικής');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Attica'), ('el_GR', LAST_INSERT_ID(), 'Αττικής');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'AC', 'Αχαΐας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Achaea'), ('el_GR', LAST_INSERT_ID(), 'Αχαΐας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'BO', 'Βοιωτίας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Boeotia'), ('el_GR', LAST_INSERT_ID(), 'Βοιωτίας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'GRV', 'Γρεβενών');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Grevena'), ('el_GR', LAST_INSERT_ID(), 'Γρεβενών');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'DR', 'Δράμας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Drama'), ('el_GR', LAST_INSERT_ID(), 'Δράμας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'DO', 'Δωδεκανήσου');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Dodecanese'), ('el_GR', LAST_INSERT_ID(), 'Δωδεκανήσου');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'EVR', 'Έβρου');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Evros'), ('el_GR', LAST_INSERT_ID(), 'Έβρου');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'ΕU', 'Εύβοιας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Euboea'), ('el_GR', LAST_INSERT_ID(), 'Εύβοιας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'EV', 'Ευρυτανίας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Evrytania'), ('el_GR', LAST_INSERT_ID(), 'Ευρυτανίας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'ZA', 'Ζακύνθου');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Zakynthos'), ('el_GR', LAST_INSERT_ID(), 'Ζακύνθου');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'EL', 'Ηλείας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Elis'), ('el_GR', LAST_INSERT_ID(), 'Ηλείας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'IM', 'Ημαθίας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Imathia'), ('el_GR', LAST_INSERT_ID(), 'Ημαθίας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'HE', 'Ηρακλείου');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Heraklion'), ('el_GR', LAST_INSERT_ID(), 'Ηρακλείου');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'THE', 'Θεσπρωτίας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Thesprotia'), ('el_GR', LAST_INSERT_ID(), 'Θεσπρωτίας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'TH', 'Θεσσαλονίκης');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Thessaloniki'), ('el_GR', LAST_INSERT_ID(), 'Θεσσαλονίκης');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'IO', 'Ιωαννίνων');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Ioannina'), ('el_GR', LAST_INSERT_ID(), 'Ιωαννίνων');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'KA', 'Καβάλας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Kavala'), ('el_GR', LAST_INSERT_ID(), 'Καβάλας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'KAR', 'Καρδίτσας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Karditsa'), ('el_GR', LAST_INSERT_ID(), 'Καρδίτσας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'KAS', 'Καστοριάς');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Kastoria'), ('el_GR', LAST_INSERT_ID(), 'Καστοριάς');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'CO', 'Κέρκυρας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Corfu'), ('el_GR', LAST_INSERT_ID(), 'Κέρκυρας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'KE', 'Κεφαλληνίας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Kefalonia and Ithaca'), ('el_GR', LAST_INSERT_ID(), 'Κεφαλληνίας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'KI', 'Κιλκίς');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Kilkis'), ('el_GR', LAST_INSERT_ID(), 'Κιλκίς');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'KO', 'Κοζάνης');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Kozani'), ('el_GR', LAST_INSERT_ID(), 'Κοζάνης');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'COR', 'Κορινθίας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Corinthia'), ('el_GR', LAST_INSERT_ID(), 'Κορινθίας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'CY', 'Κυκλάδων');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Cyclades'), ('el_GR', LAST_INSERT_ID(), 'Κυκλάδων');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'LAC', 'Λακωνίας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Laconia'), ('el_GR', LAST_INSERT_ID(), 'Λακωνίας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'LAR', 'Λάρισας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Larissa'), ('el_GR', LAST_INSERT_ID(), 'Λάρισας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'LA', 'Λασιθίου');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Lasithi'), ('el_GR', LAST_INSERT_ID(), 'Λασιθίου');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'LES', 'Λέσβου');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Lesbos'), ('el_GR', LAST_INSERT_ID(), 'Λέσβου');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'LE', 'Λευκάδας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Lefkada'), ('el_GR', LAST_INSERT_ID(), 'Λευκάδας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'MA', 'Μαγνησίας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Magnesia'), ('el_GR', LAST_INSERT_ID(), 'Μαγνησίας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'ME', 'Μεσσηνίας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Messenia'), ('el_GR', LAST_INSERT_ID(), 'Μεσσηνίας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'XA', 'Ξάνθης');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Xanthi'), ('el_GR', LAST_INSERT_ID(), 'Ξάνθης');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'PE', 'Πέλλας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Pella'), ('el_GR', LAST_INSERT_ID(), 'Πέλλας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'PI', 'Πιερίας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Pieria'), ('el_GR', LAST_INSERT_ID(), 'Πιερίας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'PR', 'Πρέβεζας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Preveza'), ('el_GR', LAST_INSERT_ID(), 'Πρέβεζας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'RE', 'Ρεθύμνης');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Rethymno'), ('el_GR', LAST_INSERT_ID(), 'Ρεθύμνης');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'RH', 'Ροδόπης');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Rhodope'), ('el_GR', LAST_INSERT_ID(), 'Ροδόπης');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'SA', 'Σάμου');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Samos'), ('el_GR', LAST_INSERT_ID(), 'Σάμου');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'SE', 'Σερρών');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Serres'), ('el_GR', LAST_INSERT_ID(), 'Σερρών');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'TR', 'Τρικάλων');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Trikala'), ('el_GR', LAST_INSERT_ID(), 'Τρικάλων');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'PHT', 'Φθιώτιδας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Phthiotis'), ('el_GR', LAST_INSERT_ID(), 'Φθιώτιδας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'FL', 'Φλώρινας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Florina'), ('el_GR', LAST_INSERT_ID(), 'Φλώρινας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'PH', 'Φωκίδας');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Phocis'), ('el_GR', LAST_INSERT_ID(), 'Φωκίδας');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'CHAL', 'Χαλκιδικής');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Chalkidiki'), ('el_GR', LAST_INSERT_ID(), 'Χαλκιδικής');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'CH', 'Χανίων');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Chania'), ('el_GR', LAST_INSERT_ID(), 'Χανίων');

INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('GR', 'CHI', 'Χίου');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Chios'), ('el_GR', LAST_INSERT_ID(), 'Χίου');

");

$installer->endSetup();

