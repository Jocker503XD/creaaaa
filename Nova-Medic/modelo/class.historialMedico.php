<?php
class Expediente{
    private $id;
    private $peso;
    private $altura;
    private $sangre;
    private $alergia;
    private $medicina;
    private $padecimiento;

    //veirfica que los datos no esten vacios
    public function veriData($peso,$altura,$sangre,$alergia,$medicina,$padecimiento){
        if(isset($peso) && isset($altura) && isset($sangre) && isset($alergia) && isset($medicina) && isset($padecimiento)){
            $this->peso= $peso;
            $this->altura = $altura;
            $this->sangre = $sangre;
            $this->alergia = $alergia;
            $this->medicina = $medicina;
            $this->padecimiento = $padecimiento;
        }else{
            throw new Exception('Error, Tiene que rellenar todos los datos');
        }
    }

    //crear historial
    public function newExpediente(){
        $dbh = new Conexion();
        $conexion = $dbh->get_conexion();
        $sql = "insert into expediente (peso, estatura, sangre, alergia, padecimiento, medicamento) values (:peso, :estatura, :sangre, :alergia, :padecimiento, :medicamento)";
        $stmt = $conexion->prepare($sql) ;
        $stmt->bindParam(":peso",$this->peso);
        $stmt->bindParam(":estatura",$this->estatura);
        $stmt->bindParam(":sangre",$this->sangre);
        $stmt->bindParam(":alergia",$this->alergia);
        $stmt->bindParam(":padecimiento",$this->padecimiento);
        $stmt->bindParam(":medicamento",$this->medicina);
        if(!$stmt){
            throw new Exception("Error. No se pudo conectar con la base de datos");
        }else{
            $stmt->execute();
            //Se a registrado correctamente
        }
    }

    //Actualizar id_Experiente en el cliente
    public function updateId(){
        $dbh = new Conexion();
        $conexion = $dbh->get_conexion();
        $sql = "insert into cliente (id_historial) value (:id_historial)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(":id_historial",$this->id);
    }

    //funciones get
    public function getPeso(){
        return $this->peso;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function getSangre(){
        return $this->sangre;
    }

    public function getAlergia(){
        return $this->alergia;
    }

    public function getMedicina(){
        return $this->medicina;
    }

    public function getPadecimiento(){
        return $this->padecimiento;
    }
}
?>