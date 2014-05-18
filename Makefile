##
# The MIT License (MIT)
#
# Copyright (c) 2014 Jerome Quere
#
# Permission is hereby granted, free of charge, to any person obtaining a copy
# of this software and associated documentation files (the "Software"), to deal
# in the Software without restriction, including without limitation the rights
# to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
# copies of the Software, and to permit persons to whom the Software is
# furnished to do so, subject to the following conditions:
#
# The above copyright notice and this permission notice shall be included in all
# copies or substantial portions of the Software.
#
# THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
# IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
# FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
# AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
# LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
# OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
# SOFTWARE.
##

RM		=	rm -rf

NAME		=	express-monolog.phar
SRC_DIR		=	src
SRC_FILE	=	Logger.class.php		\
			LoggerHandlerFactory.class.php	\
			index.php

COMPOSER_DIR	=	$(SRC_DIR)/vendor
COMPOSER_LOCK	=	$(SRC_DIR)/composer.lock

SRC		=	$(addprefix $(SRC_DIR)/, $(SRC_FILE))

all		:
			composer install -d $(SRC_DIR)
			phar pack -f $(NAME) -l 1 -c auto $(SRC) `find $(COMPOSER_DIR) -name "*.php"`

clean		:
			$(RM) $(NAME) $(COMPOSER_DIR) $(COMPOSER_LOCK)
