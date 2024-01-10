--
-- PostgreSQL database dump
--

-- Dumped from database version 14.5
-- Dumped by pg_dump version 14.5

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: cities; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.cities (
    id bigint NOT NULL,
    city text NOT NULL
);


ALTER TABLE public.cities OWNER TO postgres;

--
-- Name: cities_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.cities_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cities_id_seq OWNER TO postgres;

--
-- Name: cities_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.cities_id_seq OWNED BY public.cities.id;


--
-- Name: colors; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.colors (
    id bigint NOT NULL,
    col text NOT NULL
);


ALTER TABLE public.colors OWNER TO postgres;

--
-- Name: colors_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.colors_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.colors_id_seq OWNER TO postgres;

--
-- Name: colors_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.colors_id_seq OWNED BY public.colors.id;


--
-- Name: korzinas; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.korzinas (
    id bigint NOT NULL,
    session_id character varying(255) NOT NULL,
    idtovar integer NOT NULL,
    kolich integer NOT NULL,
    itprice integer NOT NULL
);


ALTER TABLE public.korzinas OWNER TO postgres;

--
-- Name: korzinas_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.korzinas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.korzinas_id_seq OWNER TO postgres;

--
-- Name: korzinas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.korzinas_id_seq OWNED BY public.korzinas.id;


--
-- Name: midels; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.midels (
    idtov bigint NOT NULL,
    path text NOT NULL
);


ALTER TABLE public.midels OWNER TO postgres;

--
-- Name: midels_idtov_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.midels_idtov_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.midels_idtov_seq OWNER TO postgres;

--
-- Name: midels_idtov_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.midels_idtov_seq OWNED BY public.midels.idtov;


--
-- Name: migrations; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO postgres;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.migrations_id_seq OWNER TO postgres;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- Name: obems; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.obems (
    id bigint NOT NULL,
    obem text NOT NULL
);


ALTER TABLE public.obems OWNER TO postgres;

--
-- Name: obems_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.obems_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.obems_id_seq OWNER TO postgres;

--
-- Name: obems_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.obems_id_seq OWNED BY public.obems.id;


--
-- Name: podborkis; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.podborkis (
    id bigint NOT NULL,
    type text NOT NULL,
    nazv text NOT NULL,
    photo text NOT NULL
);


ALTER TABLE public.podborkis OWNER TO postgres;

--
-- Name: podborkis_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.podborkis_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.podborkis_id_seq OWNER TO postgres;

--
-- Name: podborkis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.podborkis_id_seq OWNED BY public.podborkis.id;


--
-- Name: sliders; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.sliders (
    id bigint NOT NULL,
    text text NOT NULL,
    poboch text NOT NULL,
    photo text NOT NULL,
    tovar text NOT NULL
);


ALTER TABLE public.sliders OWNER TO postgres;

--
-- Name: sliders_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.sliders_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sliders_id_seq OWNER TO postgres;

--
-- Name: sliders_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.sliders_id_seq OWNED BY public.sliders.id;


--
-- Name: tovars; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tovars (
    id bigint NOT NULL,
    type text NOT NULL,
    podborka text NOT NULL,
    nazv text NOT NULL,
    obem text NOT NULL,
    col text NOT NULL,
    opis text NOT NULL,
    photo text NOT NULL,
    price integer NOT NULL,
    poboch text NOT NULL,
    obchs text NOT NULL
);


ALTER TABLE public.tovars OWNER TO postgres;

--
-- Name: tovars_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tovars_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tovars_id_seq OWNER TO postgres;

--
-- Name: tovars_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tovars_id_seq OWNED BY public.tovars.id;


--
-- Name: types; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.types (
    id bigint NOT NULL,
    typ text NOT NULL
);


ALTER TABLE public.types OWNER TO postgres;

--
-- Name: types_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.types_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.types_id_seq OWNER TO postgres;

--
-- Name: types_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.types_id_seq OWNED BY public.types.id;


--
-- Name: wishes; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.wishes (
    id bigint NOT NULL,
    session_id character varying(255) NOT NULL,
    idtovar integer NOT NULL,
    kolich integer NOT NULL
);


ALTER TABLE public.wishes OWNER TO postgres;

--
-- Name: wishes_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.wishes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.wishes_id_seq OWNER TO postgres;

--
-- Name: wishes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.wishes_id_seq OWNED BY public.wishes.id;


--
-- Name: zayavs; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.zayavs (
    id bigint NOT NULL,
    idt integer NOT NULL,
    fio text NOT NULL,
    nomer text NOT NULL,
    city text NOT NULL,
    summ integer NOT NULL
);


ALTER TABLE public.zayavs OWNER TO postgres;

--
-- Name: zayavs_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.zayavs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.zayavs_id_seq OWNER TO postgres;

--
-- Name: zayavs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.zayavs_id_seq OWNED BY public.zayavs.id;


--
-- Name: cities id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cities ALTER COLUMN id SET DEFAULT nextval('public.cities_id_seq'::regclass);


--
-- Name: colors id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.colors ALTER COLUMN id SET DEFAULT nextval('public.colors_id_seq'::regclass);


--
-- Name: korzinas id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.korzinas ALTER COLUMN id SET DEFAULT nextval('public.korzinas_id_seq'::regclass);


--
-- Name: midels idtov; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.midels ALTER COLUMN idtov SET DEFAULT nextval('public.midels_idtov_seq'::regclass);


--
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- Name: obems id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.obems ALTER COLUMN id SET DEFAULT nextval('public.obems_id_seq'::regclass);


--
-- Name: podborkis id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.podborkis ALTER COLUMN id SET DEFAULT nextval('public.podborkis_id_seq'::regclass);


--
-- Name: sliders id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sliders ALTER COLUMN id SET DEFAULT nextval('public.sliders_id_seq'::regclass);


--
-- Name: tovars id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tovars ALTER COLUMN id SET DEFAULT nextval('public.tovars_id_seq'::regclass);


--
-- Name: types id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.types ALTER COLUMN id SET DEFAULT nextval('public.types_id_seq'::regclass);


--
-- Name: wishes id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.wishes ALTER COLUMN id SET DEFAULT nextval('public.wishes_id_seq'::regclass);


--
-- Name: zayavs id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.zayavs ALTER COLUMN id SET DEFAULT nextval('public.zayavs_id_seq'::regclass);


--
-- Data for Name: cities; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Data for Name: colors; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.colors VALUES (1, 'Красный');
INSERT INTO public.colors VALUES (2, 'Оранжевый');
INSERT INTO public.colors VALUES (3, 'Зеленый');


--
-- Data for Name: korzinas; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Data for Name: midels; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.migrations VALUES (137, '2023_10_02_191014_create_cities_table', 1);
INSERT INTO public.migrations VALUES (138, '2023_10_02_191218_create_zayavs_table', 1);
INSERT INTO public.migrations VALUES (139, '2023_10_02_191354_create_colors_table', 1);
INSERT INTO public.migrations VALUES (140, '2023_10_02_191405_create_obems_table', 1);
INSERT INTO public.migrations VALUES (141, '2023_10_02_191443_create_types_table', 1);
INSERT INTO public.migrations VALUES (142, '2023_10_02_191507_create_midels_table', 1);
INSERT INTO public.migrations VALUES (143, '2023_10_02_191522_create_tovars_table', 1);
INSERT INTO public.migrations VALUES (144, '2023_10_10_211635_create_korzinas_table', 1);
INSERT INTO public.migrations VALUES (145, '2023_10_10_211934_create_wishes_table', 1);
INSERT INTO public.migrations VALUES (146, '2023_10_19_040939_create_podborkis_table', 1);
INSERT INTO public.migrations VALUES (147, '2023_10_31_232519_create_sliders_table', 1);


--
-- Data for Name: obems; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.obems VALUES (1, '64 Gb');
INSERT INTO public.obems VALUES (2, '128 Gb');
INSERT INTO public.obems VALUES (3, '256 Gb');
INSERT INTO public.obems VALUES (4, '');


--
-- Data for Name: podborkis; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.podborkis VALUES (2, 'iPhone', 'Iphone 11', 'uploads/WtNQrbeu53L1h0x6a7CFQdPGzqKy9xjY3AsBTM9n.png');


--
-- Data for Name: sliders; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.sliders VALUES (4, 'Купите цыгана', 'Он хорший', 'uploads/oH5NmCir3AbgfzjOsBA5rfsKGfsivwOUJ2ZluTAb.png', 'Mac/Iphone 11/1');
INSERT INTO public.sliders VALUES (5, 'Купите цыгана', 'Он хорший', 'uploads/tY6Z41rQblSfVZE62A3jm5eiBPrZNqoEf5zmVfkb.jpg', 'Mac/Iphone 11/1');


--
-- Data for Name: tovars; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.tovars VALUES (1, 'Mac', 'Iphone 11', 'Iphone 11', '256 Gb', 'Зеленый', 'Четкий телефон купите цыгана', 'uploads/1K3wIsHWEC8NGdH62aBqwKCYOC1XYe4vaUBQuDxt.png', 52000, 'uploads/v89jGkYX6XuRsrP3jaimPE70egxsulHAcVAfkRmh.png', 'Iphone 11 256 Gb Зеленый');
INSERT INTO public.tovars VALUES (2, 'Mac', 'Iphone 11', 'Iphone 11 PRO', '64 Gb', 'Оранжевый', 'Классный телефон', 'uploads/KxOoPWPaHtvjGZ4knep4eYeeSQk4kbmB94dbAdKs.jpg', 92990, 'uploads/DC3uptQvWf4bbgh7tm5XMSy86lUbRz7F4a1OiAEW.jpg', 'Iphone 11 PRO 64 Gb Оранжевый');


--
-- Data for Name: types; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.types VALUES (1, 'Mac');
INSERT INTO public.types VALUES (2, 'iPad');
INSERT INTO public.types VALUES (3, 'iPhone');
INSERT INTO public.types VALUES (4, 'Watch');
INSERT INTO public.types VALUES (5, 'AirPods');
INSERT INTO public.types VALUES (6, 'Аксессуары');


--
-- Data for Name: wishes; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Data for Name: zayavs; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: cities_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.cities_id_seq', 1, false);


--
-- Name: colors_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.colors_id_seq', 3, true);


--
-- Name: korzinas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.korzinas_id_seq', 1, false);


--
-- Name: midels_idtov_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.midels_idtov_seq', 1, false);


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.migrations_id_seq', 147, true);


--
-- Name: obems_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.obems_id_seq', 4, true);


--
-- Name: podborkis_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.podborkis_id_seq', 2, true);


--
-- Name: sliders_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.sliders_id_seq', 5, true);


--
-- Name: tovars_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tovars_id_seq', 2, true);


--
-- Name: types_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.types_id_seq', 6, true);


--
-- Name: wishes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.wishes_id_seq', 1, false);


--
-- Name: zayavs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.zayavs_id_seq', 1, false);


--
-- Name: cities cities_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cities
    ADD CONSTRAINT cities_pkey PRIMARY KEY (id);


--
-- Name: colors colors_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.colors
    ADD CONSTRAINT colors_pkey PRIMARY KEY (id);


--
-- Name: korzinas korzinas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.korzinas
    ADD CONSTRAINT korzinas_pkey PRIMARY KEY (id);


--
-- Name: midels midels_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.midels
    ADD CONSTRAINT midels_pkey PRIMARY KEY (idtov);


--
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: obems obems_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.obems
    ADD CONSTRAINT obems_pkey PRIMARY KEY (id);


--
-- Name: podborkis podborkis_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.podborkis
    ADD CONSTRAINT podborkis_pkey PRIMARY KEY (id);


--
-- Name: sliders sliders_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sliders
    ADD CONSTRAINT sliders_pkey PRIMARY KEY (id);


--
-- Name: tovars tovars_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tovars
    ADD CONSTRAINT tovars_pkey PRIMARY KEY (id);


--
-- Name: types types_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.types
    ADD CONSTRAINT types_pkey PRIMARY KEY (id);


--
-- Name: wishes wishes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.wishes
    ADD CONSTRAINT wishes_pkey PRIMARY KEY (id);


--
-- Name: zayavs zayavs_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.zayavs
    ADD CONSTRAINT zayavs_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

