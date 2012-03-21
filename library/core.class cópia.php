<?php

class Core{
    
    public function ShowDate($format){
        switch ($format){
            case 'Log': return date('Y-m-d H:i:s O'); break; 
            case 'Atom': return date('Y-m-d\TH:i:s\Z'); break;
            case 'RSS': return date('D, d M Y H:i:s O'); break;  
            //default: //ISO8601 -> 2012-03-12T20:18:12-0300

        }
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
            Core::WriteErrorLog('mysql', 'critical', mysql_error());
            return false;
        }else{
            return true;
        }
    }
    
    public function Select(){
        if(!@mysql_select_db(DB_NAME)){
            Core::WriteErrorLog('mysql', 'critical', mysql_error());
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
        if(MySQL::Connect()){
            MySQL::Select();
        }
    }
    
    public function Disconnect(){
        mysql_close();
    }
}

?>