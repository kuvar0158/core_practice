<?php
SELECT p.product_id, p.product_name, suppliers.supplier_name
FROM products p
INNER JOIN suppliers
ON p.supplier_id = suppliers.supplier_id
ORDER BY p.product_name ASC, suppliers.supplier_name DESC;