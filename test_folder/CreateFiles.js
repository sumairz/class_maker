/*
* @Author: Sumair Zafar
* @Last Updated: 2016-05-19
* @File Created: 2016-05-19 03:36:13
*/

var CreateFiles = function () {
'use strict';

    this.fileName = "";
    this.fileDateCreated = "";
    this.fileFormat = "";
    this.fileSize = "";
    fileLength = "";
    formatAllowed = "";
    fileUploadLimit = "";
  
  
};

"use strict"; //use strict conventions

/* ********** Getters and Setters START ******** */
CreateFiles.prototype = { 
    
    getFileName: function() {
        return this.fileName;
    }, 
    
    setFileName: function(value) {
        this.fileName = value'
    },        
    
    getFileDateCreated: function() {
        return this.fileDateCreated;
    }, 
    
    setFileDateCreated: function(value) {
        this.fileDateCreated = value'
    },        
    
    getFileFormat: function() {
        return this.fileFormat;
    }, 
    
    setFileFormat: function(value) {
        this.fileFormat = value'
    },        
    
    getFileSize: function() {
        return this.fileSize;
    }, 
    
    setFileSize: function(value) {
        this.fileSize = value'
    },        
}
/* ********** Getters and Setters END ******** */

/* ********** Class Methods START ******** */
    
    CreateTextFile: function() {
        return true;
    }, 
    
    
    CreatePdfFile: function() {
        return true;
    }, 
    
    
    CreateDocFile: function() {
        return true;
    }, 
    
    
    CreateExcelFile: function() {
        return true;
    }, 
    
    
    CreateCSVFile: function() {
        return true;
    }, 
    
/* ********** Class Methods END ******** */
}