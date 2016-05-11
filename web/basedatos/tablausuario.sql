create table usuario ( idusuario integer , nombrepersona varchar(40),nombreusuario varchar(40),  contrasena varchar(40),conectado boolean , primary key (idusuario) );



CREATE SEQUENCE usuario_id;
ALTER SEQUENCE usuario_id OWNED BY usuario.idusuario;
ALTER TABLE usuario ALTER COLUMN idusuario SET DEFAULT nextval(usuario_id);
ALTER TABLE usuario ALTER COLUMN conectado SET DEFAULT  false;


INSERT INTO "usuario" (nombrepersona,nombreusuario,contrasena,conectado) values ('jose','chiki','12',true);


 CREATE OR REPLACE FUNCTION suma(INTEGER, INTEGER) RETURNS INTEGER AS $BODY$  DECLARE  resultado INTEGER; BEGIN resultado:=$1+$2; RETURN resultado; END; $BODY$ LANGUAGE plpgsql;

CREATE OR REPLACE FUNCTION udf_Encrypt( VARCHAR) RETURNS  VARCHAR AS $BODY$  DECLARE var ALIAS FOR $1; resultado VARCHAR; BEGIN resultado:=hex(AES_ENCRYPT(var, 'Der3ch0'));    RETURN resultado; END; $BODY$ LANGUAGE plpgsql;