! function() {
    "use strict";
    window.countryList = {

al: {
            name: 'Shqipëria',
            code: 'al',
            price: 4990,
            oldPrice: 9980,
            labelPrice: 'ALL',
            phoneHelper: 'Shembull +355 1234567890',
            nameHelper: 'Florjan Fejzollari',
            nameError: 'Emri është i nevojshëm',
            phoneError: 'Numri i telefonit është e nevojshme',
            countryError: 'Vendi është i nevojshëm',
            isDefault: true
        },


  bg: {
            name: 'България',
            code: 'bg',
            price: 69,
            oldPrice: 138,
            labelPrice: 'leva',
            phoneHelper: 'Например, +359 123456789',
            nameHelper: 'Jivko Djurovic',
            nameError: 'Името е задължително',
            phoneError: 'Телефонният номер е задължителен',
            countryError: 'Страната е задължителна',

        },
		
		cz: {
            name: 'Česká republika',
            code: 'cz',
            price: 849,
            oldPrice: 1698,
            labelPrice: 'CZK',
            phoneHelper: 'Například, +420 123456789',
            nameHelper: 'Pavel Smejkal',
            nameError: 'Povinné jméno',
            phoneError: 'Nesprávně zadaný počet',
            countryError: 'Povinná země',

        },

        de: {
            name: "Deutschland",
            code: "de",
            price: 39,
            oldPrice: 78,
            labelPrice: "EUR",
            phoneHelper: "zum Beispiel, +490 123456789",
            nameHelper: "Friedrich Müller",
            nameError: "Der name erforderlich",
            phoneError: "Numéro incorrectement spécifié",
            countryError: "Nummer falsch angegeben",
        },
               at: {
            name: "Österreich",
            code: "at",
            price: 39,
            oldPrice: 78,
            labelPrice: "EUR",
            phoneHelper: "zum Beispiel, +43 123456789",
            nameHelper: "Friedrich Müller",
            nameError: "Der name erforderlich",
            phoneError: "Numéro incorrectement spécifié",
            countryError: "Nummer falsch angegeben"
        },
        ch: {
            name: "Schweiz",
            code: "ch",
            price: 69,
            oldPrice: 138,
            labelPrice: "CHF",
            phoneHelper: "zum Beispiel, +41 123456789",
            nameHelper: "Friedrich Muller",
            nameError: "Der name erforderlich",
            phoneError: "Numero incorrectement specifie",
            countryError: "Nummer falsch angegeben"
        },





  lu: {
            name: 'Lëtzebuerg ',
            code: 'lu',
            price: 39,
            oldPrice: 78,
            labelPrice: 'EUR',
            phoneHelper: 'zum Beispill +352 12345678',
            nameHelper: "Friedrich Müller",
            nameError: "Der name erforderlich",
            phoneError: "Numéro incorrectement spécifié",
            countryError: "Nummer falsch angegeben",
        },


  nl: {
            name: "The Netherlands",
            code: "nl",
            price: 39,
            oldPrice: 78,
            labelPrice: "EUR",
            phoneHelper: "Bijvoorbeeld, +31 04338 5282",
            nameHelper: "Jurrien Klumpjes",
            nameError: "Naam (verplicht veld)",
            phoneError: "Telefoonnummer invoeren",
            countryError: "Land invoeren",
         },

		
		   ee: {
            name: 'Eesti',
            code: 'ee',
            price: 39,
            oldPrice: 78,
            labelPrice: 'EUR',
            phoneHelper: 'Näiteks +372 12345678',
            nameHelper: 'Sofia Yurimaa',
            nameError: 'Nimi on vajalik',
            phoneError: 'Telefon on vajalik',
            countryError: 'Riik on vajalik',

        },  


 			es: {
            name: 'España',
            code: 'es',
            price: 39,
            oldPrice: 78,
            labelPrice: 'EUR',
            phoneHelper: 'Por ejemplo, +34 123456789',
            nameHelper: 'Alejandro Rodriguez',
            nameError: 'Nombre (campo obligatorio)',
            phoneError: 'Número incorrectamente especificado',
            countryError: 'Debe introducir un país',

        },
		
		   fr: {
            name: 'France',
            code: 'fr',
            price: 39,
            oldPrice: 78,
            labelPrice: 'EUR',
            phoneHelper: 'Le téléphone mobile, +33 123456789',
            nameHelper: 'Bruno Wuille',
            nameError: 'Le nom obligatoire',
            phoneError: 'Numéro incorrectement spécifié',
            countryError: 'Nom du pays obligatoire',

        },


 gb: {
            name: 'United Kingdom',
            code: 'gb',
            price: 39,
            oldPrice: 78,
            labelPrice: '£',
            phoneHelper: 'Example +44 123456789',
            nameHelper: 'Tom Johnson',
            nameError: 'Name is required',
            phoneError: 'Telephone number is required',
            countryError: 'Country is required',

        },
		
		
	    gr: {
            name: 'Ελλάδα',
            code: 'gr',
            price: 39,
            oldPrice: 78,
            labelPrice: 'EUR',
            phoneHelper: 'για παράδειγμα +30 1234567890',
            nameHelper: 'Ioanna Benaki',
            nameError: 'Απαιτείται όνομα',
            phoneError: 'Εσφαλμένα καθορισμένο αριθμό',
            countryError: 'Απαιτείται χώρα',

        },
        cy: {
            name: 'Κύπρος',
            code: 'cy',
            price: 39,
            oldPrice: 78,
            labelPrice: 'EUR',
            phoneHelper: 'για παράδειγμα +357 12345678',
            nameHelper: 'Pantelis Lazaridis',
            nameError: 'Απαιτείται όνομα',
            phoneError: 'Εσφαλμένα καθορισμένο αριθμό',
            countryError: 'Απαιτείται χώρα',
        },

 hr: {
            name: "Hrvatska",
            code: "hr",
            price: 299,
            oldPrice: 598,
            labelPrice: "kn",
            phoneHelper: "Na primjer +385 12345678",
            nameHelper: "Ivan Tolj",
            nameError: "Potrebno ime",
            phoneError: "Potreban broj telefona",
            countryError: "Potrebna država",

        },


    hu: {
            name: 'Magyarország',
            code: 'hu',
            price: 9900,
            oldPrice: 19800,
            labelPrice: 'Ft',
            phoneHelper: 'Például, +36 12345678 ',
            nameHelper: 'Hajnalka Fruzsina',
            nameError: 'A név kötelezően kitöltendő',
            phoneError: 'A telefonszám kötelezően kitöltendő',
            countryError: 'Az ország kötelezően kitöltendő',

        },
		
		
   it: {
            name: 'Italia',
            code: 'it',
            price: 39,
            oldPrice: 78,
            labelPrice: 'EUR',
            phoneHelper: 'Per esempio, +39 0123456789',
            nameHelper: 'Francesco Rossi',
            nameError: 'Le nom obligatoire',
            phoneError: 'Il telefono è obbligatorio',
            countryError: 'Il nome del paese obbligatoria',

        },
		
	 lt: {
            name: 'Lietuva',
            code: 'lt',
            price: 39,
            oldPrice: 78,
            labelPrice: 'EUR',
            phoneHelper: 'Pavyzdžiui, +370 12345678',
            nameHelper: 'Laimo Daukanto',
            nameError: 'Užpildymui būtinas vardas',
            phoneError: 'Užpildymui būtinas telefonas',
            countryError: 'Užpildymui būtinas šalis',

        },


	    lv: {
            name: 'Latvija',
            code: 'lv',
            price: 39,
            oldPrice: 78,
            labelPrice: 'EUR',
            phoneHelper: 'Piemēram, +371 0123456789',
            nameHelper: 'Aivars Janis',
            nameError: 'Vārds (nepieciešams)',
            phoneError: 'Nepareizi Komplekta numurs',
            countryError: 'Valsts (obligāti)',
        },

    pl: {
            name: 'Polska',
            code: 'pl',
            price: 149,
            oldPrice: 298,
            labelPrice: 'zł',
            phoneHelper: 'Na przykład, +48 123456789',
            nameHelper: 'Tom Czerniak',
            nameError: 'Imię (wymagane)',
            phoneError: 'Błędnie podany numer',
            countryError: 'Kraj (wymagany)',
        },


 pt: {
            name: 'Portugal',
            code: 'pt',
            price: 39,
            oldPrice: 78,
            labelPrice: 'EUR',
            phoneHelper: 'Por exemplo, +351 123456789 ',
            nameHelper: 'Pedro Gustavo',
            nameError: 'Nome obrigatório',
            phoneError: 'Número especificado incorretamente',
            countryError: 'País obrigatório',
        },
		
		
     ro: {
            name: 'România',
            code: 'ro',
            price: 159,
            oldPrice: 318,
            labelPrice: ' RON',
            phoneHelper: 'De exemplu, +40 123456789 ',
            nameHelper: 'Ion Enache',
            nameError: 'Este necesar să indicaţi numele',
            phoneError: 'Este necesar să indicaţi numărul de telefon',
            countryError: 'Este necesar să indicaţi ţara',
        },


  si: {
            name: 'Slovenija',
            code: 'si',
            price: 39,
            oldPrice: 78,
            labelPrice: 'EUR',
            phoneHelper: 'Za primer, +386 12345678',
            nameHelper: 'Dani Zupank',
            nameError: 'Ime zahtevano',
            phoneError: 'Nepravilno določeno število',
            countryError: 'Država zahtevano',
        },

  sk: {
            name: 'Slovensko',
            code: 'sk',
            price: 39,
            oldPrice: 78,
            labelPrice: 'EUR',
            phoneHelper: 'Napríklad, +421 123456789',
            nameHelper: 'Vladimir Gordik',
            nameError: 'Meno je povinné',
            phoneError: 'Nesprávne zadaný počet',
            countryError: 'Krajina je povinná',
        }


       
    };
}();