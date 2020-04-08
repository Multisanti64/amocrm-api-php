<?php

namespace AmoCRM\AmoCRM\Helpers;

interface EntityTypesInterface
{
    const LEADS = 'leads';
    const CONTACTS = 'contacts';
    const CATALOGS = 'catalogs';
    const COMPANIES = 'companies';
    const CUSTOMERS = 'customers';
    const TAGS = 'tags';

    const DEFAULT_CATALOG_TYPE_STRING = 'regular';
    const INVOICES_CATALOG_TYPE_STRING = 'invoices';
    const PRODUCTS_CATALOG_TYPE_STRING = 'products';
}
