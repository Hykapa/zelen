## вхахвхахв 
CREATE TABLE IF NOT EXISTS public.employees
(
    id integer NOT NULL DEFAULT nextval('employees_id_seq'::regclass),
    full_name character varying(255) COLLATE pg_catalog."default" NOT NULL,
    "position" character varying(255) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT employees_pkey PRIMARY KEY (id)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.employees
    OWNER to postgres;
CREATE TABLE IF NOT EXISTS public.clients
(
    id integer NOT NULL DEFAULT nextval('clients_id_seq'::regclass),
    full_name character varying(255) COLLATE pg_catalog."default" NOT NULL,
    passport_series character varying(255) COLLATE pg_catalog."default" NOT NULL,
    passport_number character varying(255) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT clients_pkey PRIMARY KEY (id)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.clients
    OWNER to postgres;
CREATE TABLE IF NOT EXISTS public.books
(
    id integer NOT NULL DEFAULT nextval('books_id_seq'::regclass),
    name character varying(255) COLLATE pg_catalog."default" NOT NULL,
    article character varying(255) COLLATE pg_catalog."default" NOT NULL,
    receipt_date date NOT NULL,
    author character varying(255) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT books_pkey PRIMARY KEY (id)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.books
    OWNER to postgres;
CREATE TABLE IF NOT EXISTS public.book_returns
(
    id integer NOT NULL DEFAULT nextval('book_returns_id_seq'::regclass),
    book_id integer NOT NULL,
    client_id integer NOT NULL,
    employee_id integer NOT NULL,
    return_date date NOT NULL,
    book_condition character varying(255) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT book_returns_pkey PRIMARY KEY (id),
    CONSTRAINT book_returns_book_id_fkey FOREIGN KEY (book_id)
        REFERENCES public.books (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
    CONSTRAINT book_returns_client_id_fkey FOREIGN KEY (client_id)
        REFERENCES public.clients (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
    CONSTRAINT book_returns_employee_id_fkey FOREIGN KEY (employee_id)
        REFERENCES public.employees (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.book_returns
    OWNER to postgres;
CREATE TABLE IF NOT EXISTS public.book_issues
(
    id integer NOT NULL DEFAULT nextval('book_issues_id_seq'::regclass),
    book_id integer NOT NULL,
    client_id integer NOT NULL,
    employee_id integer NOT NULL,
    issue_date date NOT NULL,
    return_date date NOT NULL,
    CONSTRAINT book_issues_pkey PRIMARY KEY (id),
    CONSTRAINT book_issues_book_id_fkey FOREIGN KEY (book_id)
        REFERENCES public.books (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
    CONSTRAINT book_issues_client_id_fkey FOREIGN KEY (client_id)
        REFERENCES public.clients (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
    CONSTRAINT book_issues_employee_id_fkey FOREIGN KEY (employee_id)
        REFERENCES public.employees (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.book_issues
    OWNER to postgres;
CREATE TABLE IF NOT EXISTS public.book_conditions
(
    id integer NOT NULL DEFAULT nextval('book_conditions_id_seq'::regclass),
    name character varying(255) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT book_conditions_pkey PRIMARY KEY (id)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.book_conditions
    OWNER to postgres;
