--
-- Database: `banco_landix`
--

-- --------------------------------------------------------

--
-- Tabela `VENDEDORES`
--

CREATE TABLE `VENDEDORES` (
    `CDVEND` varchar(36) NOT NULL COMMENT 'Código do vendedor',
    `DSNOME` varchar(50) NOT NULL COMMENT 'Nome de vendedor',
    `CDTAB` int(11) NOT NULL COMMENT 'Código da tabela de preços padrão',
    `DTNASC` date COMMENT 'Data de nascimento',
    CONSTRAINT `pk_vendedores` PRIMARY KEY (`CDVEND`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabela de cadastro de vendedores';


-- --------------------------------------------------------

--
-- Tabela `CLIENTES`
--

CREATE TABLE `CLIENTES` (
    `CDCL` varchar(36) NOT NULL COMMENT 'Código do cliente',
    `DSNOME` varchar(50) NOT NULL COMMENT 'Nome do cliente',
    `IDTIPO` char(2) NOT NULL COMMENT 'Tipo de pessoa ''PF'' - Pessoa fisica; ''PJ'' - Pessoa jurídica',
    `CDVEND` varchar(36) NOT NULL COMMENT 'Código do vendedor',
    `DSLIM` decimal(15,2) NOT NULL COMMENT 'Limite de crédito',
     CONSTRAINT `pk_cliente` PRIMARY KEY (`CDCL`),
     CONSTRAINT `fk_cliente_vendedor` FOREIGN KEY (`CDVEND`) REFERENCES `VENDEDORES` (`CDVEND`)

) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabela de cadastro de clientes';
