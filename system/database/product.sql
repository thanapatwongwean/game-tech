-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2018 at 03:19 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game-tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(5) NOT NULL,
  `name` text COLLATE utf8_thai_520_w2 NOT NULL,
  `price` double NOT NULL,
  `quantity` int(10) NOT NULL,
  `type` varchar(10) COLLATE utf8_thai_520_w2 NOT NULL,
  `description` text COLLATE utf8_thai_520_w2 NOT NULL,
  `image` varchar(255) COLLATE utf8_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2 COMMENT='all products table';

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `quantity`, `type`, `description`, `image`) VALUES
(0, 'CPU (ซีพียู) INTEL 1151 CORE I7-8086K 4.0 GHz', 16500, 1, 'CPU', 'Socket 1151 Coffee Lake 300 series\r\nCPU Core / Thread 6/12\r\nFrequency 4.0 GHz\r\nTurbo 5.0 GHz\r\nIntegrated Graphics Intel UHD Graphics 630\r\nCPU Bus 8 GT/s DMI3-\r\nArchitecture 14 nm\r\nCache L2 1.5 MB\r\nCache L3 12 MB\r\nTDP 95 W', 'Core_i7_8086k.jpg'),
(1, 'CPU (ซีพียู) INTEL 1151 CELERON G4900 3.10 GHz', 1550, 3, 'CPU', 'Socket 1151 Coffee Lake 300 series\r\nCPU Core / Thread 2/2\r\nFrequency 3.1 GHz\r\nTurbo -\r\nIntegrated Graphics Intel UHD Graphics 610\r\nCPU Bus 8 GT/s DMI3\r\nArchitecture 14 nm\r\nCache L2 -\r\nCache L3 2 MB\r\nTDP 54 W', 'Celeron_G.jpg'),
(2, 'CPU (ซีพียู) AMD AM4 RYZEN7 2700 3.2 GHz', 10500, 2, 'CPU', 'Socket AM4 2000 Series\r\nCPU Core / Thread 8 / 16\r\nFrequency 3.2 GHz\r\nTurbo 4.1 GHz\r\nIntegrated Graphics -\r\nCPU Bus -\r\nArchitecture 12 nm\r\nCache L2 4 MB\r\nCache L3 16 MB\r\nTDP 65 W', 'Ryzen7.jpg'),
(3, 'VGA (การ์ดแสดงผล) GALAX RTX2080TI HOF 11GB DDR6', 51900, 1, 'VGA', 'Bus Interface 1 x PCIe 3.0 x16 Slot\r\nChipset NVIDIA\r\nSeries NVIDIA 2000 Series\r\nGPU Name -\r\nGPU Model RTX 2080TI\r\nTechnology N/A nm\r\nความเร็ว GPU 1635 MHz\r\nความเร็ว RAM 14000\r\nขนาดความจุ RAM 11 GB\r\nชนิดของ RAM GDDR6\r\nCUDA Core / Compute Units / Stream Processor 4352\r\nLength 0\r\nWidth 0\r\nHeight 0', 'RTX2080.jpg'),
(4, 'MAINBOARD (เมนบอร์ด) 2066 ASROCK X299 EXTREME4', 7050, 3, 'MB', 'Socket 2066\r\nCPU Generation Intel Core X series\r\nรองรับการกินไฟ CPU N/A\r\nChipset x299\r\nCPU Series Intel X Series\r\nจำนวน Slot แรม 8\r\nชนิดของแรม DDR4\r\nความจุแรมสูงสุด 128 GB\r\nRam Bus 2133 , 2400 , 2666 , 2800 (OC) , 2933 (OC) , 3200 (OC) , 3733 (OC) , 3800 (OC) , 3866 (OC) , 4000 (OC) , 4133 (OC) , 4200+(OC)', 'ASROCK_X299.jpg'),
(5, 'MAINBOARD (เมนบอร์ด) 3647 ASUS WS C621E SAGE (WORKSTATION) CSM', 25900, 2, 'MB', 'Socket 2066\r\nCPU Generation Intel Core X series\r\nรองรับการกินไฟ CPU N/A\r\nChipset x299\r\nCPU Series Intel X Series\r\nจำนวน Slot แรม 8\r\nชนิดของแรม DDR4\r\nความจุแรมสูงสุด 128 GB\r\nRam Bus 2133 , 2400 , 2666 , 2800 (OC) , 2933 (OC) , 3200 (OC) , 3733 (OC) , 3800 (OC) , 3866 (OC) , 4000 (OC) , 4133 (OC) , 4200+(OC)', 'ASUS_WS_C621E.jpg'),
(6, '64GB ( 16GBx4 ) DDR4/3200 RAM PC (แรมพีซี) CORSAIR DOMINATOR PLATINUM ( CMD64GX4M4C3200C16 )', 32900, 1, 'RAM', 'Type DDR4\r\nSpeed 3200 MHz\r\nTotal Capacity 64 GB\r\nCapacity Per DIMM 16 GB\r\nNumber Of DIMMs 4 DIMM(s)\r\nLatency 16-18-18', 'CORSAIR_DOMINATOR.jpg'),
(7, '2GB ( 2GBx1 , 4 chips ) DDR3/1333 RAM PC (แรมพีซี) KINGSTON VALUE RAM ( KVR13N9S6/2 )', 620, 6, 'RAM', 'Type DDR3\r\nSpeed 1333 MHz\r\nTotal Capacity 2 GB\r\nCapacity Per DIMM 2 GB\r\nNumber Of DIMMs 1 DIMM(s)\r\nLatency 9-9-9', 'Kingston_value.jpg'),
(8, 'CASE (เคส) AEROCOOL QS-183 (BLACK-RED)', 900, 5, 'CASE', 'ประเภท Micro ATX\r\nรองรับ Motherboard Micro-ATX , Mini-ITX\r\nMaterial Steel\r\nขนาด (Dimension) 355 x 335 x 170 mm\r\nสี Black-Red\r\nFront Panel I/O 2 x USB2.0 , HD Audio + MIC\r\nน้ำหนัก 2700 g\r\nรองรับ VGA ขนาด 320 mm\r\nCooling Fan Front : 120mm fan x1 (Optional) Left: 120mm fan x1 (Optional) Rear : 80mm fan x1 (1 x 80mm Black Fan Included )\r\nPower Supply ในตัว -\r\nจำนวน Watt 0', 'Aerocool.jpg'),
(9, '1 TB HDD (ฮาร์ดดิสก์) WD BLUE 7200RPM SATA3 ( WD10EZEX )', 1210, 5, 'HDD', 'ความจุ 1 TB\r\nForm Factor 3.5\r\nRPM 7200', '1TB_WD.jpg'),
(10, '1 TB SSD (เอสเอสดี) SAMSUNG 970 EVO PCIe/NVMe M.2 2280 ( MZ-V7E1T0BW )', 14500, 3, 'SSD', 'ความจุ 1 TB\r\nขนาด SSD 22x80\r\nTechnology Samsung V-NAND 3-bit MLC\r\nSequential Read (Up To) 3400 MB/s\r\nSequential Write (Up To) 2500 MB/s\r\nRandom Read (Up To) 500000 IOPS\r\nRandom Write (Up To) 450000 IOPS', '970evo.jpg'),
(11, 'POWER SUPPLY (อุปกรณ์จ่ายไฟ) SUPER FLOWER LEADEX GOLD 550W ( 80+ GOLD ) [ SF-550F14EG ]', 2990, 2, 'PSU', 'ประเภท Power Supply\r\nกำลังไฟสูงสุด 550 W\r\nFan Size 135 mm\r\nPower Factor Correction Active\r\nMainboard Connector 20+4 Pin\r\nCPU Connector 1 x 4+4 Pin\r\nPCI Ex Connector 3 x 6+2 Pin\r\nSata Connector 7\r\nMolex Connector 4\r\nFloppy Connector -\r\nสามารถถอดสายได้ Fully Modular\r\nมาตราฐานรับรอง 80+ GOLD\r\nระบบป้องกันไฟเกิน OVP/OCP/OPP/SCP/UVP\r\nรองรับไฟขาเข้า 100-240 VAC\r\nขนาด 165x150x86 mm', 'Super_flower.jpg'),
(12, 'CPU AIR COOLER (พัดลมซีพียู) ID COOLING SE-214-RGB', 1390, 2, 'COOL', 'TDP : 150W\r\nOverall Dimension : 129×80×160mm (L×W×H)\r\nHeatsink Material : 4×Ф6mm Heatpipe(Direct Touch)+Aluminum Fin+Black Coating\r\nWeight : 680g\r\nFan Dimension : 130×130×25mm\r\nFan Speed : 500-1800±10%RPM(PWM)', 'COOL.jpg'),
(13, 'VGA (การ์ดแสดงผล) SAPPHIRE AMD FirePro W7000 4GB', 29900, 1, 'VGA', 'Bus Interface 3 x PCIe 3.0 x16 Slots\r\nChipset AMD\r\nSeries AMD FirePro\r\nGPU Name Pitcairn XT GL\r\nGPU Model FirePro W7000\r\nTechnology 28 nm\r\nความเร็ว GPU 950 MHz\r\nความเร็ว RAM 1200\r\nขนาดความจุ RAM 4 GB\r\nชนิดของ RAM GDDR5\r\nCUDA Core / Compute Units / Stream Processor -\r\nLength 242 mm\r\nWidth 0\r\nHeight 0', 'FirePro.jpg'),
(14, 'NOTEBOOK (โน้ตบุ๊ค) DELL XPS13-W56795606THW10 (SILVER)', 79900, 2, 'NB', 'CPU : INTEL CORE I7-8550U\r\nRAM : 16 GB DDR3L\r\nHDD : 512 GB SSD\r\nDISPLAY : 13.3\" FHD \r\nVGA : INTEL UHD GRAPHICS 620\r\nOS : WINDOWS 10', 'XPS13.jpg'),
(15, 'NOTEBOOK (โน้ตบุ๊ค) ACER PREDATOR PH317-52-72DH', 51900, 3, 'NB', 'CPU : INTEL CORE I7-8750H\r\nRAM : 16 GB DDR4\r\nHDD : 1 TB 5400 RPM + 256 GB SSD PCI-E NVME\r\nDISPLAY : 17.3\" FHD IPS 144Hz\r\nVGA : GEFORCE GTX1060 6 GB GDDR5\r\nOS : WINDOWS 10 HOME', 'predator.jpg'),
(16, 'NOTEBOOK (โน้ตบุ๊ค) HP ENVY 13-AH1024TX (SILVER)', 45900, 1, 'NB', 'CPU : INTEL CORE I7-8565U\r\nRAM : 16 GB DDR4\r\nHDD : 512 GB SSD\r\nDISPLAY : 13.3\" LED FULL HD\r\nVGA : GEFORCE MX150 2 GB GDDR5\r\nOS : WINDOWS 10', 'Envy.jpg'),
(17, 'NOTEBOOK (โน้ตบุ๊ค) ASUS X407UF-BV048T (GOLD)', 18900, 5, 'NB', 'CPU : INTEL CORE I5-8250U\r\nRAM : 4 GB DDR4\r\nHDD : 256 GB SSD\r\nDISPLAY : 14\" HD\r\nVGA : NVIDIA GEFORCE MX130 2GB GDDR5\r\nOS : WINDOWS 10 HOME', 'x407uf.jpg'),
(18, 'NOTEBOOK (โน้ตบุ๊ค) ASUS X555QA-DM209T', 11900, 5, 'NB', 'CPU : AMD A12-9720P\r\nRAM : 4 GB DDR4\r\nHDD : 1 TB 5400 RPM\r\nDISPLAY : 15.6\" FHD\r\nVGA : INTEGRATED \r\nOS : WINDOWS 10', 'x55qa.jpg'),
(19, 'NOTEBOOK (โน้ตบุ๊ค) ASUS A570ZD-DM133T (BLACK)', 19900, 3, 'NB', 'CPU : AMD RYZEN 5 2500U \r\nRAM : 8 GB DDR4 \r\nHDD : 1 TB HDD\r\nDISPLAY : 15.6\" FULL HD\r\nVGA : GEFORCE GTX1050 4 GB GDDR5\r\nOS : WINDOWS 10', 'a507zd.jpg'),
(20, 'NOTEBOOK (โน้ตบุ๊ค) ACER NITRO AN515-52-58KD (BLACK)', 23900, 2, 'NB', 'CPU : INTEL CORE I5-8300H \r\nRAM : 8 GB DDR4 \r\nHDD : 1 TB 5400 RPM \r\nDISPLAY : 15.6\" FHD IPS \r\nVGA : GEFORCE GTX1050 4 GB GDDR5\r\nOS : WINDOWS 10 HOME 64 BIT', 'nitro.jpg'),
(21, 'NOTEBOOK (โน้ตบุ๊ค) HP OMEN 15-DC0143TX', 63900, 1, 'NB', 'CPU : INTEL CORE I7-8750U \r\nRAM : 32 GB DDR4 \r\nHDD : 1 TB 5400 RPM + 512 GB SSD M.2\r\nDISPLAY : 15.6\" FHD IPS 144Hz\r\nVGA : GEFORCE GTX1070 8 GB GDDR5 \r\nOS : WINDOWS 10 HOME', 'omen.jpg'),
(22, 'NOTEBOOK (โน้ตบุ๊ค) ASUS ROG G703GI-E5077T', 149000, 1, 'NB', 'CPU : INTEL CORE I9-8950HK \r\nRAM : 64 GB DDR4 \r\nHDD : 2 TB 5400 RPM + 256 GB NVME M.2 SSD\r\nDISPLAY : 17.3\" FHD IPS 144Hz G-SYNC\r\nVGA : GEFORCE GTX 1080 8 GB GDDR5 \r\nOS : WINDOWS 10', 'rog.jpg'),
(23, 'MOUSE (เม้าส์) CORSAIR SCIMITAR RGB PRO [CH-9304011-AP] GAMING GEAR', 3690, 2, 'Mouse', 'DPI : 1-16000 dpi\r\nSensor Type : Optical\r\nMouse Backlighting : 4 Zone RGB\r\nProg Buttons : 17\r\nReport Rate Selectable : 1000Hz/500Hz/250Hz/125Hz\r\nOn-board Memory : Yes', 'corsair.jpg'),
(24, 'MOUSE (เม้าส์) SIGNO GAMING [NARCISO] GM-981 (BLACK)', 650, 3, 'Mouse', '7 Macro Keys\r\n7 Backlighting Mode\r\nOmron Switch Technology (10 Million Click)\r\nAvago 3050 Sensor Technology\r\nOnboard Memory  inside 8K\r\nDPI Switching Technology with 250-4000 DPI\r\nBackward/Forward Function\r\nRGB 16.8 Million Colors Backlighting\r\nNylon Code with gold USB 2.0 port\r\nLength 1.8 M.\r\nPlug & Play', 'signo.jpg'),
(25, 'MOUSE (เม้าส์ไร้สาย) STEELSERIES RIVAL 650 WIRELESS [62456] GAMING GEAR', 4290, 1, 'Mouse', 'Sensor System\r\nSteelSeries True : Move3+ Dual Sensor System\r\nPrimary Sensor : TrueMove 3 Optical Gaming Sensor\r\nSecondary Sensor : Depth Sensing Linear Optical Detection\r\nCPI : 100–12000 in 100 CPI Increments\r\nIPS : 350+, on SteelSeries QcK surfaces\r\nAcceleration : 50G\r\nHardware Acceleration : None (Zero Hardware Acceleration)\r\nLift Off Distance : Customizable, 0.5–2 mm', 'steel.jpg'),
(26, 'KEYBOARD (คีย์บอร์ด) STEELSERIES APEX M750 BLACK (QX2 SWITCH) (RGB LED) (EN) (64677)', 4990, 2, 'KB', 'Design\r\nTop Material : 5000 Series Aluminum Alloy\r\nN-Key Roll Over : 104-Key(All)\r\nAnti-Ghosting : 100%\r\nIllumination : Individually controllable per-key RGB, including whole-keyboard patterns, and reactive typing effects\r\nWeight : 1 kg / 2.2 lbs\r\nHeight : 153.5 mm / 6 inches\r\nWidth : 454 mm / 17.9 inches\r\nDepth : 46.7 mm / 1.8 inches\r\nCable Length : 2 m / 6.5 ft\r\n\r\nSwitch\r\nType & Name : SteelSeries QX2 Linear Mechanical RGB Switch\r\nActuation Point : 2 mm\r\nTotal Travel : 4 mm\r\nForce : 45 cN\r\nLifetime : 50 Million Keypresses\r\n\r\nCompatibility\r\nOS : Windows and Mac OS X. USB port required\r\nSoftware : SteelSeries Engine 3.11+, for Windows (7 or newer) and Mac OSX (10.8 or newer)', 'steelk.jpg'),
(27, 'KEYBOARD (คีย์บอร์ด) SIGNO GAMING MECHANICAL KB-778 [MAXIMUS]', 1790, 3, 'KB', 'Optical Switch\r\n21 Mode Colors Backlighting\r\n12 Enhanced Multimedia Keys\r\nWindow Lock Function\r\n104 Keys Anti-Ghosting\r\nMacro and RGB Lighting Effect Program\r\nAluminium Body\r\nStrong Rubber Cord Length 1.8 M\r\nPlug & Play', 'signok.jpg'),
(28, 'KEYBOARD (คีย์บอร์ด) CORSAIR K95 PLATINUM RGB MX SPEED SWITCH TH-LG [CH-9127014-TH] GAMING GEAR', 6990, 2, 'KB', 'Key Switches Cherry(R) MX RGB Speed\r\nKeyboard Backlighting RGB\r\n465mm x 171mm x 36mm\r\n6 dedicated G-keys\r\n100% anti-ghosting with full key rollover on USB\r\n1.324kg', 'corsairk.jpg'),
(29, 'HEADSET (หูฟัง) SENNHEISER GAMING GEAR [GSP 600]', 11490, 2, 'Headset', 'Color : black\r\nWearing style : Headband\r\nImpedance : 28 Ω\r\nConnector : 2 x 3.5 mm (3-pole connectors) 1 x 3.5 mm (4-pole connectors)\r\nFrequency response (Microphone) : 10–18,000 Hz\r\nFrequency response (Headphones) : 10–30,000 Hz\r\nSound pressure level (SPL) : 112 dB SPL @ 1 kHz, 1V RMS\r\nEar coupling : Over-Ear\r\nCable length : 2.5 m PC cable / 1.5 m Console cable\r\nTransducer principle : Dynamic, closed\r\nWeight : 395 g\r\nPick-up pattern : Bi-directional ECM\r\nMicrophone sensitivity : -47 dBV/PA ', 'sennheiser.jpg'),
(30, 'HEADSET (หูฟังไร้สาย) HyperX GAMING GEAR [CLOUD FLIGHT] WIRELESS', 5490, 5, 'Headset', 'Headphone\r\nDriver: Dynamic, 50mm with neodymium magnets\r\nType: Circumaural, Closed back\r\n\r\nFrequency response:\r\nWireless: 20Hz–20,000Hz\r\nAnalog: 15Hz–23,000Hz\r\nImpedance: 32 Ω\r\nSound pressure level: 106dBSPL/mW at 1kHz\r\nT.H.D.: &lt; 2%\r\nWeight: 300g\r\nWeight with mic: 315g\r\nCable length and type: USB charge cable (1m) + Detachable 3.5mm headphone cable (1.3m)\r\n\r\nMicrophone\r\nElement: Electret condenser microphone\r\nPolar pattern: Noise-cancelling\r\nFrequency response: 100Hz-7,000 Hz\r\nSensitivity: -45dBV (0dB=1V/Pa,1kHz)\r\n\r\nBattery life\r\n30 hours - LED off\r\n18 hours - Breathing LED\r\n13 hours - Solid LED\r\n\r\nWireless Range\r\n\r\n2.4 GHz\r\nUp to 20 meters', 'hyperx.jpg'),
(31, 'HEADSET (หูฟังไร้สาย) STEELSERIES ARCTIS PRO WIRELESS [61473]', 11990, 1, 'Headset', 'Wireless. Lossless. Peerless Gaming Audio System\r\n\r\nDual Wireless: 2.4G lossless + Bluetooth\r\nIndustry-leading hi-res capable speaker drivers\r\nLightweight aluminum alloy and steel construction\r\nSwappable dual-battery system', 'steelhs.jpg'),
(32, 'InsertTestCPU', 123, 1, 'CPU', 'CPUTEST INSERT', NULL),
(33, 'InsertTestCPU2', 1234, 1, 'CPU', 'CPUCPU', NULL),
(34, 'ImageTestCPU', 12345, 1, 'CPU', 'CPUTest Image', 'product.jpg'),
(35, 'image2', 1, 1, 'CPU', '1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
