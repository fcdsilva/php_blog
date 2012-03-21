<?php

class Core{
/* 
 * Date Formats;
 * Show Date
 * Convert Date
 * Write Error Log
 * 
 */
    
    public function ShowDate($format){
        return date($this->DateFormats($format));
    }

    public function ConvertDate($new, $date){
        return date($this->DateFormats($new), strtotime($date));   
    }
    
    public function DateFormats($format){
        switch ($format){
            case 'Atom': $output = 'Y-m-d\TH:i:s\Z'; break;
            case 'RSS': $output = 'D, d M Y H:i:s O'; break;
            case 'Log': $output = 'Y-m-d H:i:s O'; break;
            
            case 'DiaSemana, 00 de Mes de 0000': $output = 'l, d \d\e F \d\e Y'; break;
        }
    
        return $output;
    }
    
    public function WriteErrorLog($to, $level, $message){
        error_log("[".$this->ShowDate('Log')."] [".$level."] ".$message.", related by: ".$_SERVER['REMOTE_ADDR']."\r\n", 3, DIR_LOGS.$to."_error.log");
    }
    
}


class MySQL extends Core{ 
/*
 * Conncet Server
 * Select DB
 * Run
 * Disconnect
 * 
 */
        
    public function Connect(){
        if(!@mysql_connect(DB_SERVER, DB_USER, DB_PASS)){
            Core::WriteErrorLog('mysql', 'Critical', 'C_'.mysql_error());
            return false;
        }else{
            return true;
        }
    }
    
    public function Select(){
        if(!@mysql_select_db(DB_NAME)){
            Core::WriteErrorLog('mysql', 'Critical', 'S_'.mysql_error());
            return false;
        }else{
            mysql_query("SET NAMES 'utf8'");
            mysql_query('SET character_set_connection=utf8');
            mysql_query('SET character_set_client=utf8');
            mysql_query('SET character_set_results=utf8');
            
            return true;
        }
        
    }
    
    public function Run(){
        if($this->Connect()){
            $this->Select();
        }
    }
    
    public function Disconnect(){
        mysql_close();
    }
}

class Feed extends Core{
    
    public function N(){
        
    }
    
}




?>