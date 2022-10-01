-- Запрос найдет все записи с одинаковыми значениями в `col1`.

SELECT * FROM `clients`
	WHERE 
		`col1` IN (SELECT `col1` FROM `clients` GROUP BY `col1` HAVING COUNT(*) > 1)
	ORDER BY
		`col1`