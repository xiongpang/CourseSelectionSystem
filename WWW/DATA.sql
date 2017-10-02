

-- --------------------------------------------------------

--
--
--

CREATE TABLE `class` (
  `ClassNo` char(8) NOT NULL,
  `DepartNo` char(2) NOT NULL,
  `ClassName` char(20) NOT NULL,
  PRIMARY KEY  (`ClassNo`),
  KEY `DepartNo` (`DepartNo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
--
--

INSERT INTO `class` (`ClassNo`, `DepartNo`, `ClassName`) VALUES
('20000001', '01', '00e-commerce'),
('20000002', '01', '00multi-media'),
('20000003', '01', '00database'),
('20000004', '02', '00construction management'),
('20000005', '02', '00electric building'),
('20000006', '03', '00travel management'),
('20010001', '01', '01e-commerce'),
('20010002', '01', '01multi-media'),
('20010003', '01', '01database'),
('20010004', '02', '01construction management'),
('20010005', '02', '01electric building'),
('20010006', '03', '01travel management'),
('20020001', '01', '02e-commerce'),
('20020002', '01', '02multi-media'),
('20020003', '01', '02database'),
('20020004', '02', '02construction management'),
('20020005', '02', '02electric building'),
('20020006', '03', '02travel management');

-- --------------------------------------------------------

--
--
--

CREATE TABLE `course` (
  `CouNo` char(3) NOT NULL,
  `CouName` char(30) NOT NULL,
  `Kind` char(30) NOT NULL,
  `Credit` decimal(5,0) NOT NULL,
  `Teacher` char(20) NOT NULL,
  `DepartNo` char(30) NOT NULL,
  `SchoolTime` char(30) NOT NULL,
  `LimitNum` decimal(5,0) NOT NULL,
  `WillNum` decimal(5,0) NOT NULL,
  `ChooseNum` decimal(5,0) NOT NULL,
  PRIMARY KEY  (`CouNo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
--
--

INSERT INTO `course` (`CouNo`, `CouName`, `Kind`, `Credit`, `Teacher`, `DepartNo`, `SchoolTime`, `LimitNum`, `WillNum`, `ChooseNum`) VALUES
('001', 'SQL SERVER', 'Engineering', 3, 'James Lewin', '01', 'T 5-6', 25, 43, 0),
('002', 'JAVA', 'Information Tech', 2, 'Sarah Miler', '01', 'T 5-6', 10, 35, 0),
('003', 'Internet', 'Information Tech', 2, 'Frank Caplan', '01', 'T nite', 10, 29, 0),
('004', 'Linux', 'Information Tech', 2, 'Juan Cole', '01', 'T 5-6', 10, 33, 0),
('005', 'C++', 'Information Tech', 2, 'Chole Williams', '01', 'T 5-6', 20, 27, 0),
('006', 'Director', 'Information Tech', 2, 'Peter Freeman', '01', 'T 5-6', 10, 27, 0),
('007', 'Delphi', 'Information Tech', 2, 'Lawrance Souza', '01', 'T 5-6 ', 20, 27, 0),
('008', 'ASP.NET', 'Information Tech', 3, 'Xi Bai', '01', 'T 5-6', 10, 45, 0),
('009', 'Water resourse', 'Engineering', 2, 'Mark Faust', '02', 'T nite', 10, 31, 0),
('010', 'Electric Engineer', 'Engineering', 3, 'Rober Landon', '02', 'T 5-6', 5, 24, 0),
('011', 'Architecture', 'Humanities', 2, 'Peter Vankman', '02', 'T 5-6', 20, 27, 0),
('012', 'AI', 'Engineering', 2, 'Dylan Baker', '02', 'T 5-6', 10, 21, 0),
('013', 'Real Estate', 'Humanities', 2, 'Patrick Steward', '02', 'T 5-6', 10, 36, 0),
('014', 'Tech', 'Humanities', 2, 'Henry Moores', '02', 'T 5-6', 10, 24, 0),
('015', 'Tourist', 'Management', 2, 'Rose Hanks', '03', 'T 5-6', 20, 33, 0),
('016', 'Travel agent', 'Management', 2, 'Kevin Conners', '03', 'T 5-6', 20, 36, 0),
('017', 'Geology', 'Humanities', 2, 'John Frick', '03', 'T 5-6', 10, 27, 0),
('018', 'Cooking', 'Humanities', 2, 'Hank Landry', '03', 'T 5-6', 5, 66, 0),
('019', 'Maching Learning', 'Engineering', 2, 'Lily Lee', '03', 'T 5-6', 10, 0, 0);

-- --------------------------------------------------------

--
--
--

CREATE TABLE `department` (
  `DepartNo` char(10) NOT NULL,
  `DepartName` char(50) NOT NULL,
  PRIMARY KEY  (`DepartNo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
--
--

INSERT INTO `department` (`DepartNo`, `DepartName`) VALUES
('01', 'Department of Computer Engineering'),
('02', 'Department of Architectural Engineering'),
('03', 'Department of Tourist'),
('00', 'Department of Management');

-- --------------------------------------------------------

--
--
--

CREATE TABLE `stucou` (
  `StuNo` char(10) NOT NULL,
  `CouNo` char(10) NOT NULL,
  `WillOrder` smallint(6) NOT NULL,
  `State` char(10) NOT NULL,
  `RandomNum` char(50) default NULL,
  PRIMARY KEY  (`StuNo`,`CouNo`),
  KEY `CouNo` (`CouNo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
--
--

INSERT INTO `stucou` (`StuNo`, `CouNo`, `WillOrder`, `State`, `RandomNum`) VALUES
('00000001', '002', 1, 'registered', NULL),
('00000003', '008', 3, 'registered', NULL),
('00000003', '003', 3, 'registered', ''),
('00000003', '009', 1, 'registered', ''),
('00000004', '005', 2, 'registered', ''),
('00000004', '013', 3, 'registered', ''),
('00000004', '018', 1, 'registered', ''),
('00000005', '004', 2, 'registered', ''),
('00000005', '017', 3, 'registered', ''),
('00000005', '018', 1, 'registered', '');

-- --------------------------------------------------------

--
--
--

CREATE TABLE `student` (
  `StuNo` char(10) NOT NULL,
  `ClassNo` char(10) NOT NULL,
  `StuName` char(30) NOT NULL,
  `Pwd` char(10) NOT NULL,
  PRIMARY KEY  (`StuNo`),
  KEY `ClassNo` (`ClassNo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
--
--

INSERT INTO `student` (`StuNo`, `ClassNo`, `StuName`, `Pwd`) VALUES
('00000001', '20000001', 'test', '00000001'),
('00000002', '20000001', 'Cindy', '00000002'),
('00000003', '20000001', 'Hunter', '777B2DE7'),
('00000004', '20000001', 'Chris', 'EDE4293B'),
('00000005', '20000001', 'Andy', 'A08E56C4');


-- --------------------------------------------------------

--
--
--

CREATE TABLE `teacher` (
  `TeaNo` char(10) NOT NULL,
  `DepartNo` char(10) NOT NULL,
  `TeaName` char(30) NOT NULL,
  `Pwd` char(8) NOT NULL,
  PRIMARY KEY  (`TeaNo`),
  KEY `DepartNo` (`DepartNo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `teacher`
--

INSERT INTO `teacher` (`TeaNo`, `DepartNo`, `TeaName`, `Pwd`) VALUES
('00000001', '01', 'Peter Quan', 'ken7411'),
('00000002', '02', 'Robin Freeman', 'wzk'),
('00000003', '03', 'Emilie Chan', 'cw'),
('00000000', '00', 'admin', 'admin');
