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
    knopka text NOT NULL,
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
    idt text NOT NULL,
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

