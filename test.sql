/**
 * @Author: Engeryu
 * @Date:   2021-07-01 14:20:12
 * @Last Modified by:   Engeryu
 * @Last Modified time: 2025-04-06 23:14:28
 */
SELECT oc.shipping_cost_tax_excl, c.name FROM ps_order_carrier as oc
JOIN ps_carrier as c on oc.= c.name
WHERE c.active = 1 and oc.date_add BETWEEN '2020-01-01 00:00:00.000000' AND '2020-12-31 23:59:59.999999'
ORDER BY shipping_cost_tax_excl ASC;