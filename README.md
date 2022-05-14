## BackBone Assessment

Se busca replicar la funcionalidad de esta api (https://jobs.backbonesystems.io/api/zip-codes/01210):

- En primer lugar se normalizó la base de datos identificando las relaciones entre las diferentes entidades. 
    - Federal_Entities
    - Municipalities
    - Zipcodes
    - Settlements
    - Settlementstypes

    ![Diagrama E/R](http://fernandocueto.com/images/temp/02.PNG)

- Se crearon los seeders a través de un script externo en javascript y luego se corrieron las migraciones para crear la base de datos con sus respectivos seeders.
- Se siguió la metodología TDD en la cual voy creando tests y luego cada uno de los artefactos de la aplicacion.
- Se creó la Ruta del endpoint (`api/zip-codes/{zip_code}`).
- Se crearon cada uno de los modelos identificados y el controlador para la consulta.
- En el controlador se hace la busqueda del zipcode y luego se utiliza una Transformacion para mostrar solo los campos requeridos en el response de acuerdo al ejemplo.


### Live Demo

- **[https://bbassessmentfst.herokuapp.com/api/zip-codes/{zip_code}](https://bbassessmentfst.herokuapp.com/api/zip-codes/01259)**
    - `method: get`
    - `params: zip_code (string: 5)`
    - Resultado:
    ```
    {
        "zip_code": "01259",
        "locality": "CIUDAD DE MéXICO",
        "federal_entity": {
            "key": 9,
            "name": "CIUDAD DE MéXICO",
            "code": null
        },
        "settlements": [
            {
                "key": 109,
                "name": "AMPLIACIóN LA CEBADA",
                "zone_type": "URBANO",
                "settlement_type": {
                    "name": "Colonia"
                }
            },
            {
                "key": 2845,
                "name": "LA MEXICANA 2A AMPLIACIóN",
                "zone_type": "URBANO",
                "settlement_type": {
                    "name": "Colonia"
                }
            }
        ],
        "municipality": {
            "key": 10,
            "name": "ÁLVARO OBREGóN"
        }
    }

![Postman](http://fernandocueto.com/images/temp/01.PNG)