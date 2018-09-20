define({ "api": [
  {
    "type": "post",
    "url": "/getDomain",
    "title": "whois serach",
    "group": "Domain",
    "version": "0.2.0",
    "filename": "./example.js",
    "groupTitle": "Domain",
    "name": "PostGetdomain"
  },
  {
    "type": "get",
    "url": "/userRequest",
    "title": "User information",
    "name": "GetUser",
    "group": "User",
    "version": "0.2.0",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "optional": false,
            "field": "not",
            "description": "<p>@param</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>The users name.</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "age",
            "description": "<p>Calculated age from Birthday</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Example data on success:",
          "content": "{\nname: 'Paul'\nage: 27\n}",
          "type": "json"
        }
      ]
    },
    "filename": "./example.js",
    "groupTitle": "User"
  },
  {
    "type": "get",
    "url": "/userRequest",
    "title": "User infomation",
    "name": "GetUser",
    "group": "User",
    "version": "0.1.0",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>The users name.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Example data on success;",
          "content": "{\n name: 'Paul'\n}",
          "type": "json"
        }
      ]
    },
    "filename": "./_apidoc.js",
    "groupTitle": "User"
  },
  {
    "type": "get",
    "url": "/userSet",
    "title": "user set",
    "group": "User",
    "version": "0.2.0",
    "filename": "./example.js",
    "groupTitle": "User",
    "name": "GetUserset"
  },
  {
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "optional": false,
            "field": "varname1",
            "description": "<p>No type.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "varname2",
            "description": "<p>With type.</p>"
          }
        ]
      }
    },
    "type": "",
    "url": "",
    "version": "0.0.0",
    "filename": "./doc/main.js",
    "group": "_var_www_html_my_project_doc_main_js",
    "groupTitle": "_var_www_html_my_project_doc_main_js",
    "name": ""
  }
] });
