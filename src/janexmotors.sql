-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 02, 2022 at 01:51 PM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `janexmotors`
--

-- --------------------------------------------------------

--
-- Table structure for table `cita`
--

CREATE TABLE `cita` (
  `id` int NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telf` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horario_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cita`
--

INSERT INTO `cita` (`id`, `nombre`, `mail`, `telf`, `fecha`, `horario_id`) VALUES
(1, 'jan', 'jan@jan.jan', '123456789', '16 / 02 / 2022', 2),
(2, 'jan', 'jan@jan.jan', '123456789', '16 / 02 / 2022', 2);

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220126071733', '2022-01-26 08:17:51', 235),
('DoctrineMigrations\\Version20220126072229', '2022-01-26 08:22:35', 135);

-- --------------------------------------------------------

--
-- Table structure for table `estilo`
--

CREATE TABLE `estilo` (
  `id` int NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `estilo`
--

INSERT INTO `estilo` (`id`, `nombre`) VALUES
(1, 'deportiva'),
(2, 'naked');

-- --------------------------------------------------------

--
-- Table structure for table `horario`
--

CREATE TABLE `horario` (
  `id` int NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `horario`
--

INSERT INTO `horario` (`id`, `nombre`) VALUES
(1, 'mañana'),
(2, 'tarde');

-- --------------------------------------------------------

--
-- Table structure for table `marcas`
--

CREATE TABLE `marcas` (
  `id` int NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tableclass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`, `descripcion`, `img`, `color`, `logo`, `link`, `tableclass`) VALUES
(1, 'Yamaha', 'La Yamaha Motor Company es uno de los grandes gigantes japoneses en la industria del motociclismo que fue fundada en el año 1955. A partir de los años 70, Yamaha ya destacaba por hacer motos de competición. Compite en MotoGP con el nombre de Monster Energy Yamaha MotoGP por motivos de patrocinio. Llevan compitiendo con las versiones de la YZF-M1 desde el año 2002. Actualmente, cuenta con 7 campeonatos de MotoGP conseguidos por los pilotos Valentino Rossi y Jorge Lorenzo. ', './img/yamaha_long.svg', 'blue', '/img/yamaha_logo.png', 'https://www.yamaha-motor.eu/es/es/', 'azul'),
(2, 'Honda', 'Honda Motor Company es una empresa de origen japonés fundada en el año 1948. Esta compañía también se conoce por su influencia en el automovilismo, pero nos centraremos en su influencia en el mundo del motociclismo. El Repsol Honda Team es desde 1994 el equipo oficial de Honda. Como equipo ha conseguido 10 campeonatos de MotoGP de la mano de distintos pilotos: Valentino Rossi, Nicky Hayden, Casey Stoner y Marc Márquez entre ellos. ', './img/honda_long.png', 'red', '/img/honda_logo.png', 'https://www.honda.es/motorcycles.html', 'rojo'),
(3, 'Kawasaki', 'Kawasaki Heavy Industries es otra de los grandes gigantes japoneses con gran impacto en el motociclismo. La empresa se fundó en 1896 y en 1949 apareció la división Kawasaki Heavy Industries Motorcycle & Engine. A diferencia de las anteriores, Kawasaki destaca en las SuperBikes. De hecho, llevan 6 años consecutivos considerados los mejores constuctores de motos en SuperBikes. Destaca el piloto Jonathan Rea, que es quien lleva ganando estos 6 ultimos años. ', './img/kawasaki_long.png', 'green', '/img/kawasaki_logo.png', 'https://www.kawasaki.es/es/products', 'verde'),
(4, 'Ducati', 'Ducati Motor Holding es una empresa italiana fabricante de motocicletas, fundada en 1926 en Bolonia, pero no fue hasta 1952 cuando diseñaron su primera motocicleta. Actualmente se considera una de las marcas más importantes en el sector del motociclismo comercial y deportivo. Ducati Corse es la división de equipo de carrera de Ducati que trata con la participación de la firma en carreras de motocicletas. Actualmente compite en MotoGP, el Campeonato Mundial de SuperBikes y otros campeonatos nacionales. Cuenta con un campeonato de MotoGP a manos de Casey Stoner y con nada menos que 17 campeonatos en SuperBikes.', './img/ducati_long.png', 'red', '/img/ducati_logo.png', 'https://www.ducati.com/es/es/home', 'rojo');

-- --------------------------------------------------------

--
-- Table structure for table `mensaje`
--

CREATE TABLE `mensaje` (
  `id` int NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telf` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensaje` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mensaje`
--

INSERT INTO `mensaje` (`id`, `nombre`, `mail`, `telf`, `ciudad`, `mensaje`) VALUES
(2, 'Jan', 'jan@jan.jan', '123456789', 'Cs', 'Test 1 save msj BBDD'),
(6, 'aklsdjf', 'asdf@jasdf.asdf', '123456789', 'Cs', 'asdfasf');

-- --------------------------------------------------------

--
-- Table structure for table `motos`
--

CREATE TABLE `motos` (
  `id` int NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `potencia` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cilindrada` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cilindros` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca_id` int NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estilo_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `motos`
--

INSERT INTO `motos` (`id`, `nombre`, `descripcion`, `img`, `potencia`, `cilindrada`, `cilindros`, `precio`, `marca_id`, `alias`, `estilo_id`) VALUES
(1, 'YAMAHA YZF-R1', 'La carrocería es aerodinámica, está equipada con el imponente carenado inspirado en la M1 y ofrece un rendimiento máximo. Los faros LED de última generación y las luces de posición LED acentúan la intimidante presencia de esta moto, y con los sistemas de control de frenado (BC) y administración de freno motor (EBM), tendrás un control absoluto. Cada uno de los siete sistemas de asistencia electrónicos ajustables se puede adaptar al detalle en cuestión de segundos mediante el sistema YRC. Con todo esto y una suspensión mejorada, un motor EU5 refinado y unos neumáticos RS11 premium, la R1 ha elevado el listón a un nivel totalmente nuevo.', './img/yamaha_r1.png', '210 cv', '1000 cc', '4', '21.899€', 1, 'r1', 1),
(2, 'YAMAHA YZF-R6', 'La supersport Yamaha YZF-R6 está inspirada en la YZF-R1 de la que toma sus claves de diseño para proponer una imagen mucho más dinámica y vanguardista. El motor de cuatro cilindros en paralelo ha sido revisado a fondo pero Yamaha no ha logrado igualar los 123 CV de la versión precedente, quedándose en 118 CV a 14.500 rpm. También ha descendido ligeramemte la cifra de par que pasa de 65,7 a 61,8 Nm a 10.500 rpm. Elementos como pistones de aluminio forjado, relación de compresión 13.1:1, válvulas de admisión/escape de titanio, sistema de inducción de aire y admisión controlada por circuito integrado de Yamaha (YCC-I) evidencian la tecnología que Yamaha ha aplicado a la nueva R6.', './img/yamaha_r6.png', '130 cv', '600 cc', '4', '15.849€', 1, 'r6', 1),
(3, 'YAMAHA MT07', 'Su motor de diseño compacto de 689 cc y 2 cilindros en línea con \"filosofía crossplane\" está concebido para ofrecerte un par motor potente y lineal para una aceleración impresionante con un consumo excepcionalmente reducido. El atrevido diseño de la carrocería, con entradas de aire más agresivas, refuerza las señas de identidad de la gama MT, mientras que el asiento proporciona una mejor posición de conducción. Con una refinada suspensión delantera y trasera, el chasis tubular y compacto de la MT-07 se dirige exactamente a donde lo enfilas... y te lleva directamente al lado oscuro de Japón.', './img/yamaha_mt07.png', '78 cv', '700 cc', '2', '6.799€', 1, 'mt07', 2),
(4, 'HONDA CBR 1000RR FIREBLADE', 'La CBR1000RR-R Fireblade 2020 hereda toda la tecnología en cuanto a motor y parte ciclo de la especial RC213V-S de calle y añade la aerodinámica empleada por la versión de competición para crear una deportiva de 1000 totalmente enfocada a su uso en circuito. Por lo tanto, no toma como base la anterior versión, ni siquiera el motor, que es de nueva creación y que cuenta con las mismas medidas diámetro y carrera que el de RC213V de carreras. Es un propulsor compacto y dotado de tecnología de baja fricción que ofrece unas prestaciones más que notables. El escape también es de nueva factura y ha sido desarrollado de forma conjunta con Akrapovic y está fabricado en titanio. Su potencia es de 215 CV, lo que la convierte en una de las superbike más potentes del momento.', './img/honda_cbr.png', '214 cv', '1000 cc', '4', '24.500€', 2, 'cbr', 1),
(5, 'HONDA CB500F', 'En cuanto a su diseño, la CB500F ofrece una imagen moderna de líneas angulosas que se mantiene intacta desde 2019. Otro elemento importante en las naked, el depósito de gasolina, queda integrado de manera impecable en este modelo gracias a su perfecto ajuste con el asiento y las tapas laterales. Su capacidad es de 17 litros y otorga una autonomía superior a los 480 kilómetros. Se trata de una moto apta para pilotos de cualquier talla pues su asiento se encuentra situado a 785 mm del suelo, lo que unido a un peso inferior a 200 kg hace que las maniobras en parado se realicen con facilidad. Su posición de conducción es confortable, con un manillar relativamente elevado y las estriberas situadas en una posición neutra que buscan una ergonomía neutra.', './img/honda_cbf.png', '47 cv', '471 cc', '2', '6.250€', 2, 'cbf', 2),
(6, 'HONDA HORNET', 'La nueva generación Hornet que nació en 2007 es una moto naked totalmente diferente a su predecesora, sobre todo en cuanto a diseño pero también en otros elementos clave , como el bastidor y el basculante de aluminio. Más deportiva y futurista, monta el motor de cuatro cilindros de la CBR600 pero con modificaciones para rebajar la potencia y dotarla de un carácter más urbano. Se trata de una moto muy polivalente debido a su comodidad y planteamiento sport pero moderado, muy recomendable para el día a día. ', './img/honda_hornet.png', '102 cv', '600 cc', '4', '8.529€', 2, 'hornet', 2),
(7, 'KAWASAKI NINJA 1000S', 'La Kawasaki Ninja 1000SX es una poderosa sport turismo que en 2020 se renueva por completo, abandonando además la nomenclatura utilizada hasta ahora de Z1000 y adquiriendo el apellido Ninja, lo que refleja el espíritu deportivo de esta montura.Su estética es imponente, más Ninja que nunca en donde el escape y el frontal afilado marcan las líneas. El motor de la Ninja 1000SX es el conocido cuatro cilindros en línea de la marca japonesa, de increíble respuesta en el medio régimen y que en 2020 recibe modificaciones en su acelerador electrónico para lograr una entrega más lineal y dosificable así como una mayor suavidad en el accionamiento.', './img/kawa_ninja.png', '142 cv', '1043 cc', '4', '15.299€', 3, 'ninja', 1),
(8, 'KAWASAKI Z800', '40 años después del nacimiento de la primera Z, Kawasaki presenta la Z800, una naked que deriva de la Z750 que tanto éxito ha cosechado, y que manteniendo el estilo Z nos muestra un estilo más agresivo. El motor aumenta de cilindrada ofreciendo mayor par motor desde bajas revoluciones y una potencia máxima 6 CV por encima del de la anterior Z750, el chasis se modifica para ofrecer más estabilidad, y suspensión y frenos se mejoran. La instrumentación se muestra mediante una pantalla LCD completamente digital. Estéticamente, la cúpula delantera aún más deportiva sirve como muestra del camino elegido por Kawasaki con esta evolución de la Z.', './img/kawa_z800.png', '113 cv', '806 cc', '4', '8.525€', 3, 'z800', 2),
(9, 'KAWASAKI NINJA H2', 'La Kawasaki Ninja H2 llegó para marcar un antes y un después entre las motos de altas prestaciones gracias a su propulsor sobrealimentado y aspecto de caza, gracias a sus spoilers y alerones. En 2019 era renovada con una importante ganancia de potencia y una mayor presencia de tecnología y equipamiento, mientras que en 2020 no se introducen mas cambios que pequeños estéticos.', './img/kawa_h2.png', '231 cv', '1000 cc', '4', '33.850€', 3, 'h2', 1),
(10, 'DUCATI MONSTER 1200S', 'Es una versión lanzada en 2018 con la que se rinde homenaje a los 25 años de historia del modelo Monster. Toma de base la S, con la que comparte motor y parte ciclo, pero se añaden numerosos elementos que las hacen diferentes, empezado por su decoración. Y es que la 25º Aniversario luce especialmente gracias a su decoración inspirada en la bandera italiana, que combinan a la perfección con el chasis y las llantas Marchesini de color oro.', './img/ducati_monster.png', '150 cv', '1200 cc', '2', '17.890€', 4, 'monster', 2),
(11, 'DUCATI PANIGALE V4', 'La Ducati Panigale V4 es una deportiva que deriva directamente de la Desmosedici de MotoGP, una moto muy avanzada tecnológicamente con un explosivo motor capaz de rendir 214 CV. Lanzada en 2018, la Panigale V4 se renueva en 2020 adquiriendo gran parte de las componentes que incorpora la Panigale V4 R, en especial el paquete aerodinámico con los alerones que hacen que la moto tenga un comportamiento más eficaz a alta velocidad.', './img/ducati_panigale.png', '214 cv', '1100 cc', '4', '26.190€', 4, 'panigale', 1),
(12, 'DUCATI STREETFIGHTER V4', 'Estamos ante una naked dotada de tecnología de MotoGP que queda patente en un elemento estético y aerodinámico que se estrena por primera vez en una moto naked, los alerones . Estos proceden de la experiencia de Ducati Corse en el Mundial. Estas alas biplano, tal y como las define Ducati, buscan ofrecer la máxima estabilidad a máxima velocidad y también al frenar. Trabajan de forma independiente al estar situadas en diferentes planos y se han ubicado lo más cerca posible de la rueda delantera para incrementar el efecto anti-levantamiento.', './img/ducati_streetfighter.png', '208 cv', '1100 cc', '4', '21.990€', 4, 'streetfighter', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3E379A624959F1BA` (`horario_id`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `estilo`
--
ALTER TABLE `estilo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motos`
--
ALTER TABLE `motos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_BC5434D681EF0041` (`marca_id`),
  ADD KEY `IDX_BC5434D643798DA7` (`estilo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cita`
--
ALTER TABLE `cita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `estilo`
--
ALTER TABLE `estilo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `horario`
--
ALTER TABLE `horario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `motos`
--
ALTER TABLE `motos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `FK_3E379A624959F1BA` FOREIGN KEY (`horario_id`) REFERENCES `horario` (`id`);

--
-- Constraints for table `motos`
--
ALTER TABLE `motos`
  ADD CONSTRAINT `FK_BC5434D643798DA7` FOREIGN KEY (`estilo_id`) REFERENCES `estilo` (`id`),
  ADD CONSTRAINT `FK_BC5434D681EF0041` FOREIGN KEY (`marca_id`) REFERENCES `marcas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
