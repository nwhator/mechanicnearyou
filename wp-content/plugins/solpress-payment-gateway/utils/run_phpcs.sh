rm -f wp-vip-go.txt && phpcs --standard=WordPress-VIP-Go -sp --basepath=. --ignore='vendor,release' --extensions=php . > wp-vip-go.txt & rm -f wp-var-analysis.txt &&  phpcs --standard=VariableAnalysis -sp --basepath=. --ignore='vendor,release' --extensions=php . > wp-var-analysis.txt & rm -f wp-vip-min.txt &&  phpcs --standard=WordPressVIPMinimum -sp --basepath=. --ignore='vendor,release' --extensions=php . > wp-vip-min.txt  &